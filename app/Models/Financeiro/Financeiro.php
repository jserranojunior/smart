<?php

namespace App\Models\Financeiro;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tables\contas_a_pagar;
use App\Models\Tables\valor_contas_a_pagar;

class Financeiro extends Model
{
    public function __construct(contas_a_pagar $contasAPagar, valor_contas_a_pagar $valorContasAPagar){
        $this->contasAPagar = $contasAPagar;
        $this->valorContasAPagar = $valorContasAPagar;
        $this->data = "2018-07";
    }

    public function index(){

            $contas = $this->contasAPagar->contasMensais($this->data);           
            foreach($contas as $conta){              
                $valorContasAPagar = $this->valorContasAPagar->valorParaPagar($this->data, $conta->id);                
                foreach($valorContasAPagar as $valores){
                    $conta->valor = $valores->valor;
                    $conta->item = $valores->item;
                    $conta->ccustos = $valores->ccustos;
                    $conta->favorecido = $valores->favorecido;
                    $conta->dia = date('d', strtotime($valores->inicio_mes));                    
                }                  
            }        
            $contasCategoriaSoma = $contas->sum('valor');
            return $contas;
        

    }
}
