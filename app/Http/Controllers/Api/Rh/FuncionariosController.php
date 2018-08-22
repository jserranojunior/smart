<?php

namespace App\Http\Controllers\Api\Rh;

use DB;
use Illuminate\Http\Request;
use App\Models\Tables\tbl_funcionario;
use App\Http\Controllers\Controller;


class FuncionariosController extends Controller

{
    public function __construct(tbl_funcionario $funcionarios){       
        $this->funcionarios = $funcionarios;
    }
    
    public function index()
    {
        $funcionarios = $this->funcionarios->getFuncionariosAtivos();
        return $funcionarios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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

        $infoContrato = DB::table('tbl_funcionario_cargo as cargo')
        ->where('cargo.cd_funcionario', $id)
        ->select('cargos.nm_cargo', 'status.cd_status', 'funcao.cd_funcao', 'unidades.nm_unidade', 'horario.hr_entrada', 'horario.hr_saida', 'horario.nm_intervalo')
        ->leftjoin('tbl_cargos as cargos', 'cargos.cd_codigo', '=', 'cargo.cd_cargo')
        ->leftjoin('tbl_funcionario_status as status', 'status.cd_funcionario', '=', 'cargo.cd_funcionario')
        ->leftjoin('tbl_funcionario_funcao as funcao', 'funcao.cd_funcionario', '=', 'cargo.cd_funcionario')
        ->leftjoin('tbl_funcionario_unidade as unidade', 'unidade.cd_funcionario', '=', 'cargo.cd_funcionario')
        ->leftjoin('tbl_unidades as unidades', 'unidades.cd_codigo', '=', 'unidade.cd_unidade')
        ->leftjoin('tbl_funcionario_horario as horario', 'horario.cd_funcionario', '=', 'cargo.cd_funcionario')
        ->orderBy('cargo.cd_codigo', 'desc')
        ->take(1)
        ->get();

        foreach($infoContrato as $info){
            $info->hr_entrada = date('H:i', strtotime($info->hr_entrada)); 
            $info->hr_saida = date('H:i', strtotime($info->hr_saida));          
        }
   

        $cargos = DB::table('tbl_cargos')
        ->select('nm_cargo', 'cd_codigo')
        ->get();

        $unidades= DB::table('tbl_unidades')
        ->select('nm_unidade', 'cd_codigo')
        ->get();

        //dd($infoContrato);
  
        $dados = array(
            'contatos' => $contatos, 
            'funcionario' => $funcionario, 
            'dependentes' => $dependentes,
            'infoContrato' => $infoContrato,
            'cargos' => $cargos,
            'unidades' => $unidades,
        );

        return($dados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
