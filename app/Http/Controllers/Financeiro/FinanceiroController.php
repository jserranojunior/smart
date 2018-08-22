<?php

namespace App\Http\Controllers\Financeiro;

use App\Http\Controllers\Api\Financeiro\ApiFinanceiroController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinanceiroController extends Controller
{
    
    public function __construct(ApiFinanceiroController $financeiro){
        $this->financeiro = $financeiro;
    }

    public function index(Request $request)
    {
        $financeiro = $this->financeiro->index($request);
        $dados = $financeiro;
        return view('Financeiro.index')->with($dados);
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
    public function edit($id, $data)
    {
       // dd($request->date);
        return($this->financeiro->edit($id, $data));
        
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
