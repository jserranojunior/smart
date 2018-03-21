@extends('layouts.header')

@section('content')    

<section class="dashboard-header">
    <div class="container-fluid">        
        <div class="row d-flex">
            <div class="col-lg">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">EDITAR CADASTRO</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="">                      
                            @foreach($dados as $item)                   
                                <table class="table table-sm table-align-center">

                                <tr>
                                    <td>
                                        <label for="nm_nome">Nome</label>                                    
                                        </td>
                                        <td  colspan="3">
                                        <input type="text" name="nm_nome" value="{{$item->nm_nome}}" class="form-control-sm form-control">
                                  </td>
                                  <td>
                                    <label for="cd_matricula">Matricula</label>
                                  </td>
                                  <td>
                                    <input type="text" name="cd_matricula" value="{{$item->cd_matricula}}" class="form-control-sm form-control">
                                  </td>                                  
                                </tr>

                                <tr>
                                    <td>
                                        <label for="dt_nascimento">Data Nascimento</label>
                                    </td>
                                    <td>
                                        <input type="text" name="dt_nascimento" value="{{$item->dt_nascimento}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="cd_sexo">Sexo</label>                                    
                                    </td>
                                    <td>
                                        <select name="cd_sexo" class="form-control">
                                            <option @if($item->cd_sexo == 2)selected @endif value="2">Feminino</option>
                                            <option @if($item->cd_sexo == 1)selected @endif value="1">Masculino</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label for="cd_estado_civil">Estado Civil</label> 
                                    </td>
                                    <td>
                                        <select name="cd_estado_civil" class="form-control">
                                                <option @if($item->cd_estado_civil== 1)selected @endif value="1">Solteiro</option>
                                                <option @if($item->cd_estado_civil == 2)selected @endif value="1">Casado</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="nm_cep">CEP</label>
                                    </td>
                                    <td>
                                        <input type="text" name="nm_cep" value="{{$item->nm_cep}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="nm_bairro">Bairro</label>                                    
                                    </td>
                                    <td>
                                        <input type="text" name="nm_bairro" value="{{$item->nm_bairro}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="nm_cidade">Cidade</label> 
                                    </td>
                                    <td>
                                            <input type="text" name="nm_cidade" value="{{$item->nm_cidade}}" class="form-control-sm form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="nm_endereco">Logradouro</label>                                    
                                        </td>
                                        <td  colspan="3">
                                        <input type="text" name="nm_endereco" value="{{$item->nm_endereco}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="nr_numero">Numero</label>
                                    </td>
                                    <td>
                                        <input type="text" name="nr_numero" value="{{$item->nr_numero}}" class="form-control-sm form-control">
                                    </td>                                  
                                </tr>

                                
                                </table>
                            @endforeach                            
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
