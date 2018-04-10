@extends('layouts.header')

@section('content')    
<section class="dashboard-header">
    <div class="container-fluid">        
        <div class="row d-flex">
            <div class="col-lg">
                <div class="card">
                        <div class="card-header text-center">
                            <h4>FUNCIONARIOS</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>MATRICULA</th>
                                            <th>NOME</th>
                                            <th>EDITAR</th>
                                        </tr>
                                        <tbody>
                                            @foreach($dados as $item)
                                                <tr class="mouse-pointer" onclick="editarId('funcionarios','{{$item->cd_codigo}}');">
                                                    <td>1</td>
                                                    <td>{{$item->cd_matricula}}</td>
                                                    <td>{{$item->nm_nome}}</td>
                                                    <td>{{$item->cd_codigo}}</td>
                                                </tr>
                                            @endforeach 
                                        </tbody>
                                    </thead>
                                </table>
                        </div>
                    </div>
                </div>         
            </div>
        </div>
    </div>
</section>

@endsection

