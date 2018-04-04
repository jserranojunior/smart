<?php

namespace App\Http\Controllers\Rh;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class diasTrabalhadosController extends Controller
{
    public function index(){
        $funcionarios  = DB::table('tbl_funcionario')
        ->select('cd_codigo','cd_matricula','nm_nome')
        ->where('dt_demissao_geral', null)
        ->where('dt_admissao_geral', '<>', null)
        ->orderBy('nm_nome')
        ->get();

        $dados = ['dados' => $funcionarios];

        return view('rh.diasTrabalhados')->with($dados);
    }
}
