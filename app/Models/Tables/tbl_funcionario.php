<?php

namespace App\Models\Tables;
use DB;

use Illuminate\Database\Eloquent\Model;

class tbl_funcionario extends Model
{
    protected $table = "tbl_funcionario";

    public function getFuncionariosAtivos(){
        
        $funcionarios  = self::select('cd_codigo','cd_matricula','nm_nome')
        ->where('dt_demissao_geral', null)
        ->where('dt_admissao_geral', '<>', null)
        ->orderBy('nm_nome')
        ->get();

        return $funcionarios;

    }
}
