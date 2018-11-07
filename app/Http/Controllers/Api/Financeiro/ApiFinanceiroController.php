<?php

namespace App\Http\Controllers\Api\Financeiro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Financeiro\Financeiro;


class ApiFinanceiroController extends Controller
{
    public function __construct(Financeiro $financeiro){
        $this->financeiro = $financeiro;
    }
   
    public function index(Request $request)
    {        
        return($this->financeiro->index($request));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id, $data)
    {
       // dd($request->date);
        return($this->financeiro->edit($id, $data));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
