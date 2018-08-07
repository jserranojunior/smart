<?php

namespace App\Models\Financeiro;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tables\contas_a_pagar;
use App\Models\Tables\valor_contas_a_pagar;
use App\Models\Tables\financeiro_pagamentos_feitos;
use App\Models\Functions\Data;
use DB;

class Financeiro extends Model
{
    public function __construct(
        contas_a_pagar $contasAPagar, 
        valor_contas_a_pagar $valorContasAPagar,
        financeiro_pagamentos_feitos $pagamentosFeitos,
        Data $dataFunctions
        ){
        $this->contasAPagar = $contasAPagar;
        $this->valorContasAPagar = $valorContasAPagar;     
        $this->pagamentosFeitos = $pagamentosFeitos;   
        $this->dataFunctions = $dataFunctions; 
    }

    public function index($request){
        /* Request Date */
        if($request->data > ''){
            $this->data = $request->data;
            }else{
            $this->data = date('Y-m');
        }
        if($request->diaInicial > ''){
            $diaInicial = $request->diaInicial;
        }else{
            $diaInicial = 1;
        }
        if($request->diaFinal > ''){
            $diaFinal = $request->diaFinal;
        }else{
            $diaFinal = 31;
        }
        
        
        /* End Request Date */

        $datas = $this->dataFunctions->financeiroIndex($this->data, $diaInicial, $diaFinal);
        //dd($datas);

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
                if($pagamento->tipo_pagamento == "Cheque"){
                    $pagamento->cor_tipo_pagamento = "#ffa303";
                }
                if($pagamento->tipo_pagamento == "Transferência"){
                    $pagamento->cor_tipo_pagamento = "#6f05d1";
                }
                $conta->cor_tipo_pagamento = $pagamento->cor_tipo_pagamento;
            }

        }       
        
        
        
        /* ####### FILTERS #####*/            
        if($request->ordem > ''){
            $contas = $contas->sortBy($request->ordem);
        }
        if($request->area > ''){
            $contas = $contas->where('area','=', $request->area);
        }
        $filtros = [
            'ordem' => $request->ordem,
            'area' => $request->area,
        ];
        /* END FILTERS */



        $somaContas = $contas->sum('valor');

        $contas = $contas->values()->all();
        $dados = ['contas' => $contas, 'total' => $somaContas];            
        $dados = ['datas' => $datas, 'contas' => $contas, 'total' => $somaContas, 'filtros' => $filtros];            
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
