@extends('layouts.header')

@section('content')    

<section class="dashboard-header">
    <div class="container-fluid">        
        <div class="row d-flex">
            <div class="col-lg">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                        <div class="col-sm-2">
                            <img src="/img/avatar-icone.png"  class="img-formulario img-fluid" alt="">
                        </div>   
                        <div class="col-sm-10">
                        
                        </div>
                    </div>          
                        
                    </div>
                    <div class="card-body">
                        <form action="#" class="">                      
                            @foreach($dados as $item)                   
                                <table class="table table-sm table-align-left">

                                <tr>                                    
                                    <td >
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
                                        <label for="dt_nascimento">Nascimento</label>
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
                                <tr>
                                    <td>
                                        <label for="nm_nacionalidade">Nacionalidade</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nm_nacionalidade" value="{{$item->nm_nacionalidade}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="nm_naturalidade">Naturalidade</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nm_naturalidade" value="{{$item->nm_naturalidade}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="nm_estado">UF</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nm_estado" value="{{$item->nm_estado}}" class="form-control-sm form-control">
                                    </td>                                      
                                </tr>  

                                <tr>
                                    <td>
                                        <label for="nm_conjuge">Cônjuge</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nm_conjuge" value="{{$item->nm_conjuge}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="dt_conjuge_nasc">Nascimento Conjuge</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="dt_conjuge_nasc" value="{{$item->dt_conjuge_nasc}}" class="form-control-sm form-control">
                                    </td>   
                                    <td>
                                        <label for="cd_plano_saude_conj">Plan. Saúde Conj.</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <select name="cd_plano_saude_conj" class="form-control">
                                            <option @if($item->cd_plano_saude_conj == 0)selected @endif value="0">Não</option>
                                            <option @if($item->cd_plano_saude_conj == 1)selected @endif value="1">Sim</option>                                                
                                        </select> 
                                    </td>                                   
                                </tr> 
                                <tr>
                                    <td>
                                        <label for="nm_pai">Pai</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nm_pai" value="{{$item->nm_pai}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="nm_mae">Mãe</label>                                    
                                        </td>
                                        <td  colspan="4">
                                        <input type="text" name="nm_mae" value="{{$item->nm_mae}}" class="form-control-sm form-control">
                                    </td>                        
                                </tr> 
                                <tr>
                                    <td>
                                        <label for="cd_pis">PIS</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="cd_pis" value="{{$item->cd_pis}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="cd_ctps">Carteira Profissional</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="cd_ctps" value="{{$item->cd_ctps}}" class="form-control-sm form-control">
                                    </td>   
                                    <td>
                                        <label for="cd_ctps_serie">Serie</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <input type="text" name="cd_ctps_serie" value="{{$item->cd_ctps_serie}}" class="form-control-sm form-control">
                                    </td>                      
                                </tr> 
                                <tr>
                                    <td>
                                        <label for="nm_rg">RG</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nm_rg" value="{{$item->nm_rg}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="dt_rg_emissao">Data Emissão</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="dt_rg_emissao" value="{{$item->dt_rg_emissao}}" class="form-control-sm form-control">
                                    </td>   
                                    <td>
                                        <label for="nm_rg_expedidor">Org. Expedidor</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nm_rg_expedidor" value="{{$item->nm_rg_expedidor}}" class="form-control-sm form-control">
                                    </td>                      
                                </tr> 
                                <tr>
                                    <td>
                                        <label for="nm_cpf">CPF</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nm_cpf" value="{{$item->nm_cpf}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="nm_reservista">Reservista</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nm_reservista" value="{{$item->nm_reservista}}" class="form-control-sm form-control">
                                    </td>   
                                    <td>
                                        <label for="nm_reservista_cat">Categoria</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nm_reservista_cat" value="{{$item->nm_reservista_cat}}" class="form-control-sm form-control">
                                    </td>                      
                                </tr> 
                                <tr>
                                    <td>
                                        <label for="nm_tit_eleitor">Tittulo Eleitor</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nm_tit_eleitor" value="{{$item->nm_tit_eleitor}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="nr_tit_eleitor_zona">Zona</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nr_tit_eleitor_zona" value="{{$item->nr_tit_eleitor_zona}}" class="form-control-sm form-control">
                                    </td>   
                                    <td>
                                        <label for="nr_tit_eleitor_seccao">Secção</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nr_tit_eleitor_seccao" value="{{$item->nr_tit_eleitor_seccao}}" class="form-control-sm form-control">
                                    </td>                      
                                </tr>
                                <tr>
                                    <td>
                                        <label for="nm_banco">Banco</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="nm_banco" value="{{$item->nm_banco}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="cd_banco_ag">Agencia</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="cd_banco_ag" value="{{$item->cd_banco_ag}}" class="form-control-sm form-control">
                                    </td>   
                                    <td>
                                        <label for="cd_banco_conta">Conta</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="cd_banco_conta" value="{{$item->cd_banco_conta}}" class="form-control-sm form-control">
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
