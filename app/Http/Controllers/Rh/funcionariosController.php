<?php

namespace App\Http\Controllers\Rh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class funcionariosController extends Controller
{
    public function index(){

        $funcionarios  = DB::table('tbl_funcionario')
        ->select('cd_codigo','cd_matricula','nm_nome')
        ->where('dt_demissao_geral', null)
        ->where('dt_admissao_geral', '<>', null)
        ->orderBy('nm_nome')
        ->get();

        $funcionarios = ['dados' => $funcionarios];

        return view('rh.listagem')->with($funcionarios);
      
    }

    public function edit(Request $request){

       $id = $request->id;
        
        $funcionario  = DB::table('tbl_funcionario')        
        ->where('cd_codigo', $id)        
        ->orderBy('nm_nome')
        ->get();

        $funcionario = ['dados' => $funcionario];

        return view('rh.editar')->with($funcionario);
    }

}
