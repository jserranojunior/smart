<?php

namespace App\Http\Controllers\Rh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class variaveisMensaisController extends Controller
{
    public function index()
    {

        $funcionarios  = collect(DB::table('tbl_funcionario as funcionario')
        ->select('funcionario.cd_codigo','funcionario.cd_matricula','funcionario.nm_nome', 'unidades.nm_sigla')
        ->leftjoin('tbl_funcionario_unidade as unidade', 'unidade.cd_funcionario', '=', 'funcionario.cd_codigo')
        ->leftjoin('tbl_unidades as unidades', 'unidades.cd_codigo', '=', 'unidade.cd_unidade')
        ->where('dt_demissao_geral', null)
        ->where('dt_admissao_geral', '<>', null)       
        ->get());

        $fun = array();

        /* PLANTOES */
        $plantoes = DB::table('tbl_funcionario_plantoes')
            ->orderBy('cd_codigo', 'desc')
            ->take(1)
            ->get();

        foreach($plantoes as $plantao){
            $plantaoSex = $plantao->nr_plantoes_6h;
            $plantaoEight = $plantao->nr_plantoes_8h;
            $plantaoTwelve = $plantao->nr_plantoes_12h;
        } 

        foreach($funcionarios as $funcionario){
            $id = $funcionario->cd_codigo;
            $nome = $funcionario->nm_nome;
            $matricula = $funcionario->cd_matricula;

            $horario = DB::table('tbl_funcionario_horario')
            ->where('cd_funcionario', $id)            
            ->orderBy('cd_codigo', 'desc')
            ->take(1)
            ->get();

            /* HORA */
            foreach($horario as $horas){ 
            $count = calcularDiferencaEntreHoras( $horas->hr_entrada, $horas->hr_saida);
            }/* FIM HORA */  
                       
                
                if($count >= 8 and $count <= 11 and $count <> 6){
                    $expediente = "8h";
                    $plantao = $plantaoEight;
                }elseif($count == 6){
                    $expediente = "6h";
                    $plantao = $plantaoSex;
                }elseif($count >= 12){
                    $expediente = "12";
                    $plantao = $plantaoTwelve;
                }             

            $funcionariosArray[$id] = [
                'funcionario' => $nome, 
                'expediente' => $expediente,
                'cd_matricula' => $matricula,
                'cd_codigo' => $funcionario->cd_codigo,
                'unidade' => $funcionario->nm_sigla,
                'plantao' => $plantao,
            ];           
        }

        $funcionariosArray = ['dados' => $funcionariosArray];

        $dados = ['dados' => $funcionariosArray ];

        return view('rh.variaveisMensais')->with($dados);
    }
    
}
