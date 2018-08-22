<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;
use DB;

class financeiro_pagamentos_feitos extends Model
{
    protected $table = "financeiro_pagamentos_feitos";

    public function pagamentoMensal($data,$id){
        $this->data = $data;
        $this->id = $id;
    
        $this->pagamentoFeito = self::where(DB::raw("SUBSTRING(mes_referencia,1,7)"), '=', $this->data)      
        ->Where('id_conta', $this->id)
        ->take(1)
        ->get();  

        return $this->pagamentoFeito;
    }
}


