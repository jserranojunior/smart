@extends('layouts.header')

@section('content')    


<section class="dashboard-header">
    <div class="container-fluid">        
        <div class="row d-flex">
            <div class="col-lg">
                <div class="card">
                        <div class="card-header text-center">
                            <h4>Variaveis Mensais</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>MAT</th>
                                            <th>NOME</th>
                                            <th>HORA</th>
                                            <th>UNID</th>
                                            <th>DIAS</th>
                                            <th>EDITAR</th>
                                        </tr>
                                        <tbody>
                                            @foreach($dados as $itens)
                                                @foreach($itens as $item)
                                                
                                                    <tr>
                                                        <td>1</td>
                                                        <td>{{$item['cd_matricula']}}</td>
                                                        <td>{{$item['funcionario']}}</td>
                                                        <td>{{$item['expediente']}}</td>                                                        
                                                        <td>{{$item['unidade']}}</td>
                                                        <td>{{$item['plantao']}}</td>

                                                        <td>{{$item['cd_codigo']}}</td>
                                                    </tr>
                                                @endforeach
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

