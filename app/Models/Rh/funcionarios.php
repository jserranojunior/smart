<?php

namespace App\Models\Rh;

use Illuminate\Database\Eloquent\Model;
use DB;

class funcionarios extends Model
{
    public function editar($id){
        
        $funcionario  = DB::table('tbl_funcionario')        
        ->where('cd_codigo', $id)        
        ->orderBy('nm_nome')
        ->get();

        $contatos  = DB::table('tbl_contato')        
        ->where('id_origem', $id)  
        ->get();

        $dependentes  = DB::table('tbl_dependente as d')
        ->select('p.nm_parentesco', 'd.cd_sexo','d.nm_nome', 'd.nm_obs','d.dt_nascimento')
        ->join('tbl_parentesco as p', 'd.cd_parentesco', '=', 'p.cd_codigo')        
        ->where('cd_funcionario', $id)  
        ->get();
  
        $dados = array(
            'contatos' => $contatos, 
            'funcionario' => $funcionario, 
            'dependentes' => $dependentes
        );

        return($dados);

    }
}
