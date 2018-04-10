@extends('layouts.header')

@section('content')    


<section class="dashboard-header">
    <div class="container-fluid">        
        <div class="row d-flex">
            <div class="col-lg">
                <div class="card">
                        <div class="card-header text-center">
                            <h4>Dias Trabalhados</h4>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-md-center">
                                <div class="col-md-4">
                                    
                                </div>
                            </div>
                            
                            
                            
                            <div class="row justify-content-md-center">
                                <div class="col-md-4">
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>INP</th>
                                                <th>NOME</th>                                            
                                            </tr>
                                            <tbody>
                                                @foreach($dados as $item)
                                                <tr>   
                                                    <td>1</td>
                                                <td><input type="checkbox" class="form-control"></td>
                                                <td>{{$item->nm_nome}}</td>
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
        </div>
    </div>
</section>

@endsection

