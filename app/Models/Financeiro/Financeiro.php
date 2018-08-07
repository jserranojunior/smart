<?php

namespace App\Models\Financeiro;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tables\contas_a_pagar;
use App\Models\Tables\valor_contas_a_pagar;
use App\Models\Tables\financeiro_pagamentos_feitos;
use DB;

class Financeiro extends Model
{
    public function __construct(
        contas_a_pagar $contasAPagar, 
        valor_contas_a_pagar $valorContasAPagar,
        financeiro_pagamentos_feitos $pagamentosFeitos
        ){
        $this->contasAPagar = $contasAPagar;
        $this->valorContasAPagar = $valorContasAPagar;     
        $this->pagamentosFeitos = $pagamentosFeitos;   
    }

    public function index($request){
        /* Request Date */
        if($request->data > ''){
            $this->data = $request->data;
            }else{
            $this->data = date('Y-m');
        }/* End Request Date */

        $contas = $this->contasAPagar->contasMensais($this->data);           
        foreach($contas as $conta){              
            $valorContasAPagar = $this->valorContasAPagar->valorParaPagar($this->data, $conta->id); 
            $pagamentoFeito = $this->pagamentosFeitos->pagamentoMensal($this->data, $conta->id);               
            
            foreach($valorContasAPagar as $valores){
                $conta->valor = $valores->valor;
                $conta->item = $valores->item;
                $conta->ccustos = $valores->ccustos;
                $conta->favorecido = $valores->favorecido;
                $conta->dia = date('d', strtotime($valores->inicio_mes));                    
            } 

            foreach($pagamentoFeito as $pagamento){
                $conta->tipo_pagamento = $pagamento->tipo_pagamento;
            }

        }       
        
        
        
        /* ####### FILTERS #####*/            
        if($request->order > ''){
            $contas = $contas->sortBy($request->order);
        }
        if($request->area > ''){
            $contas = $contas->where('area','=', $request->area);
        }/* END FILTERS */

        $somaContas = $contas->sum('valor');

        $contas = $contas->values()->all();
        $dados = ['contas' => $contas, 'total' => $somaContas];            
        return $dados;       
    }

    public function edit($id, $data){
        $contas = $this->contasAPagar->where('id', $id)->get(); 
       
        $valorContasAPagar = $this->valorContasAPagar
        ->where('codigo', $id)
        ->where(DB::raw("SUBSTRING(inicio_mes,1,7)"), '<=', $data)
        ->take(1)
        ->orderBy('id', 'desc')
        ->get();  

        foreach($contas as $conta){         
            foreach($valorContasAPagar as $valores){
                $conta->valor = $valores->valor;
                $conta->item = $valores->item;
                $conta->ccustos = $valores->ccustos;
                $conta->favorecido = $valores->favorecido;
                $conta->dia = date('d', strtotime($valores->inicio_mes));                    
            }                  
        }  

        $dados = ['contas' => $contas];
        return $dados;
    }


}
