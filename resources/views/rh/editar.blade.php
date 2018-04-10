@extends('layouts.header')

@section('content')    

<section class="dashboard-header">
    <div class="container-fluid">        
        <div class="row d-flex">
            <div class="col-lg">
                <div class="card">
                    
                    <div class="card-body">
                        <form action="#" class="">                      
                            @foreach($dados['funcionario'] as $item)                                               
                            
                            <div class="row row-categorias-funcionario">
                                    <div class="col-md">
                                        <p class="text-center text-primary text-bold">FUNCIONARIO</p>
                                    </div>
                                </div>
                            <table class="table table-sm table-align-left">
                                <tr>
                                    <td rowspan="4">
                                        <img src="/img/avatar-icone.png"  class="img-formulario img-fluid" alt="">
                                    </td> 
                                </tr>
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
                            </table>
                                <div class="row row-categorias-funcionario">
                                        <div class="col-md">
                                            <p class="text-center text-primary text-bold">ENDEREÇO</p>
                                        </div>
                                    </div>
                                    <table class="table table-sm table-align-left">
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
                            </table>
                            <div class="row row-categorias-funcionario">
                                <div class="col-md">
                                    <p class="text-center text-primary text-bold">PARENTES E DEPENDENTES</p>
                                </div>
                            </div>
                            <table class="table table-sm table-align-left">
                            
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
                                        <label for="nm_parente">Nome Dependente</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <input type="text" name="nm_parente" value="{{$item->nm_parente}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="cd_parente_parentesco">Parentesco</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <input type="text" name="cd_parente_parentesco" value="{{$item->cd_parente_parentesco}}" class="form-control-sm form-control">
                                    <td>
                                        <label for="">Idade Dependente</label>                                    
                                     </td>
                                    <td  colspan="">
                                        <input type="text" name="" value="" class="form-control-sm form-control">
                                    </td>                      
                                </tr>
                            </table>
                            <div class="row row-categorias-funcionario">
                                    <div class="col-md">
                                        <p class="text-center text-primary text-bold">DEPENDENTES</p>
                                    </div>
                                </div>
                                    <table class="table table-sm table-align-left">
                                            <tr>
                                                    <td>
                                                        <label>Nome</label>  
                                                    </td>
                                                    <td>
                                                        <label>Parentesco</label>  
                                                    </td>
                                                    <td>
                                                        <label>Data de Nascimento</label>  
                                                    </td>
                                                    <td>
                                                        <label for="cd_categoria">Nome</label>  
                                                    </td>    
                                                    <td>
                                                            <label for="cd_categoria">Observações</label>  
                                                        </td>                                            
                                                    <td class="print-none text-right"> 
                                                        <div class="btn btn-primary btn-sm">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </div> 
                                                    </td>
                                                </tr>
                                        @foreach($dados['dependentes'] as $dependente)
                                            <tr>
                                                <td>{{$dependente->nm_nome}}</td>
                                                <td>
                                                    {{$dependente->nm_parentesco}}
                                                </td>
                                                <td>{{$dependente->dt_nascimento}}</td>
                                               <td>
                                                    @if($dependente->cd_sexo == 1)
                                                        Masculino
                                                    @elseif($dependente->cd_sexo == 2)
                                                        Feminino
                                                    @endif                                               
                                               </td>
                                               <td>{{$dependente->nm_obs}}</td>
                                               <td class="print-none text-right">
                                                    <div class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </div>
                                                </td> 
                                           </tr>
                                        @endforeach
    
                                    </table>
                            <div class="row row-categorias-funcionario">
                                <div class="col-md">
                                    <p class="text-center text-primary text-bold">DOCUMENTOS</p>
                                </div>
                            </div>
                            <table class="table table-sm table-align-left">
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
                                        <label for="nm_tit_eleitor">Titulo Eleitor</label>                                    
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
                            </table>
                            <div class="row row-categorias-funcionario">
                                <div class="col-md">
                                    <p class="text-center text-primary text-bold">BENEFÍCIOS</p>
                                </div>
                            </div>
                            <table class="table table-sm table-align-left">
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
                                <tr>
                                    <td>
                                        <label for="cd_sptrans">Cartão Sptrans</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="cd_sptrans" value="{{$item->cd_sptrans}}" class="form-control-sm form-control">
                                    </td>
                                    <td>
                                        <label for="cd_cmt_bom">Cartão Bom</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="cd_banco_ag" value="{{$item->cd_cmt_bom}}" class="form-control-sm form-control">
                                    </td>   
                                    <td>
                                        <label for="cd_vr">Cartão Refeição</label>                                    
                                        </td>
                                        <td  colspan="">
                                        <input type="text" name="cd_vr" value="{{$item->cd_vr}}" class="form-control-sm form-control">
                                    </td>                      
                                </tr> 
                                <tr>
                                    <td>
                                        <label for="cd_vale_alimentacao">Vale Alimentação</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <input type="text" name="cd_vale_alimentacao" value="{{$item->cd_vale_alimentacao}}" class="form-control-sm form-control">
                                    </td> 
                                    <td>
                                        <label for="cd_assistencia_medica_matricula">Assistencia Médica</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <input type="text" name="cd_assistencia_medica_matricula" value="{{$item->cd_assistencia_medica_matricula}}" class="form-control-sm form-control">
                                    </td>
                                </tr>    
                            </table>
                            <div class="row row-categorias-funcionario">
                                <div class="col-md">
                                    <p class="text-center text-primary text-bold">MÉDICO E VACINAÇÃO</p>
                                </div>
                            </div>
                            <table class="table table-sm table-align-left">

                                <tr>
                                    <td>
                                        <label for="dt_exame_medico">Data Exame Médico</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <input type="text" name="dt_exame_medico" value="{{$item->dt_exame_medico}}" class="form-control-sm form-control">
                                    </td>  
                                    <td>
                                        <label for="cd_assistencia_medica_matricula">SCR</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <select name="nr_src" class="form-control">
                                            <option @if($item->nr_scr == 0)selected @endif value="0">Não</option>
                                            <option @if($item->nr_scr == 1)selected @endif value="1">Sim</option>                                                                                        
                                        </select> 
                                    </td>  
                                    <td>
                                        <label for="nr_hepatite_b">Hepatite B</label>                                    
                                    </td>
                                    <td>
                                        <select name="nr_hepatite_b" class="form-control">
                                            <option @if($item->nr_hepatite_b == 0)selected @endif value="0">Não Tomou</option>
                                            <option @if($item->nr_hepatite_b == 1)selected @endif value="1">1° Dose</option>
                                            <option @if($item->nr_hepatite_b == 2)selected @endif value="2">2° Dose</option> 
                                            <option @if($item->nr_hepatite_b == 3)selected @endif value="3">3° Dose</option>                                              
                                        </select> 
                                    </td>                                                                                              
                                </tr> 
                                <tr>
                                    
                                    <td>
                                        <label for="nr_dupla_adulto">Dupla Adulto</label>                                    
                                    </td>
                                    <td >
                                        <select name="nr_hepatite_b" class="form-control">
                                            <option @if($item->nr_dupla_adulto == 0)selected @endif value="0">Não Tomou</option>
                                            <option @if($item->nr_dupla_adulto == 1)selected @endif value="1">1° Dose</option>
                                            <option @if($item->nr_dupla_adulto == 2)selected @endif value="2">2° Dose</option> 
                                            <option @if($item->nr_dupla_adulto == 3)selected @endif value="3">3° Dose</option>                                              
                                        </select> 
                                    </td>
                                    <td>
                                        <label for="dt_dupla_adulto_validade">Validade</label>                                    
                                    </td>
                                    <td >
                                        <input type="text" name="dt_dupla_adulto_validade" value="{{$item->dt_dupla_adulto_validade}}" class="form-control-sm form-control">
                                    </td>                       
                                </tr> 
                            </table>
                            <div class="row row-categorias-funcionario">
                                <div class="col-md">
                                    <p class="text-center text-primary text-bold">REGISTRO MÉDICO</p>
                                </div>
                            </div>
                            <table class="table table-sm table-align-left">
                                <tr>
                                    <td>
                                        <label for="cd_conspro">COREN</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <select name="cd_conspro" class="form-control">
                                                <option @if($item->cd_conspro == 1)selected @endif value="1">Não Possui</option>
                                                <option @if($item->cd_conspro == 2)selected @endif value="2">Possui</option>                                                                                        
                                        </select> 
                                    </td>  
                                    <td>
                                        <label for="cd_numreg">N° Coren</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <input type="text" name="cd_numreg" value="{{$item->cd_numreg}}" class="form-control-sm form-control">
                                    </td>
                                     
                                    <td>
                                        <label for="cd_regpro_cargo">Cargo Coren</label>                                    
                                     </td>
                                    <td  colspan="">
                                        <select name="cd_rgpro_cargo" class="form-control">
                                            <option @if($item->cd_rgpro_cargo == 0)selected @endif value="0">Não Possui</option>
                                            <option @if($item->cd_rgpro_cargo == 1)selected @endif value="1">Auxiliar</option>
                                            <option @if($item->cd_rgpro_cargo == 2)selected @endif value="2">Tecnico</option> 
                                            <option @if($item->cd_rgpro_cargo == 3)selected @endif value="3">Enfermagem</option>                                              
                                        </select>
                                    </td>                      
                                </tr> 
                                <tr>
                                    <td>
                                        <label for="rgpro_concessao">Concessão</label>                                    
                                    </td>
                                    <td  colspan="">
                                    <select name="rgpro_concessao" class="form-control">
                                            <option @if($item->rgpro_concessao == 0)selected @endif value="0">Não Possui</option>
                                            <option @if($item->rgpro_concessao == 1)selected @endif value="1">Definitivo</option>
                                            <option @if($item->rgpro_concessao == 2)selected @endif value="2">Provisório</option>                                               
                                        </select>
                                    </td>  
                                    <td>
                                        <label for="cd_rgpro_status">Situação</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <select name="cd_rgpro_status" class="form-control">
                                            <option @if($item->cd_rgpro_status == 0)selected @endif value="0">Não Possui</option>
                                            <option @if($item->cd_rgpro_status == 1)selected @endif value="1">Ativo</option>
                                            <option @if($item->cd_rgpro_status == 2)selected @endif value="2">Inativo</option>                                               
                                        </select>
                                        </td>                                     
                                    <td>
                                        <label for="obs_rgpro">Observações</label>                                    
                                     </td>
                                    <td  colspan="">
                                    <input type="text" name="obs_rgpro" value="{{$item->obs_rgpro}}" class="form-control-sm form-control">
                                    </td>                      
                                </tr>
                                <tr>
                                    <td>
                                        <label for="dt_rgproinscr">Data Inscrição</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <input type="text" name="dt_rgproinscr" value="{{$item->dt_rgproinscr}}" class="form-control-sm form-control">
                                    <td>
                                        <label for="dt_rgpropag">Data Pagamento</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <input type="text" name="dt_rgpropag" value="{{$item->dt_rgpropag}}" class="form-control-sm form-control">
                                    <td>
                                        <label for="dt_rgproval">Validade</label>                                    
                                     </td>
                                    <td  colspan="">
                                        <input type="text" name="dt_rgproval" value="{{$item->dt_rgproval}}" class="form-control-sm form-control">
                                    </td>                      
                                </tr> 
                            </table>
                            <div class="row row-categorias-funcionario">
                                <div class="col-md">
                                    <p class="text-center text-primary text-bold">INFORMAÇÕES DE CONTRATO</p>
                                </div>
                            </div>
                            <table class="table table-sm table-align-left">
                            @foreach($dados['infoContrato'] as $infoContrato)
                                <tr>     
                                    <td>
                                        <label for="nm_cargo">Cargo</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <select name="nm_cargo" class="form-control">
                                        @foreach($dados['cargos'] as $cargo)
                                            <option 
                                                @if($infoContrato->nm_cargo == $cargo->nm_cargo) selected @endif                                            
                                            value="{{$cargo->cd_codigo}}">{{$cargo->nm_cargo}}</option>
                                        @endforeach                                            
                                        </select>
                                    </td>                               
                                    <td>
                                        <label for="dt_admissao_geral">Data Admissão</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <input type="text" name="dt_admissao_geral" value="{{$item->dt_admissao_geral}}" class="form-control-sm form-control">
                                    <td>
                                        <label for="">Data Demissão</label>                                    
                                     </td>
                                    <td  colspan="">
                                        <input type="text" name="dt_demissao_geral" value="{{$item->dt_demissao_geral}}" class="form-control-sm form-control">
                                    </td>                      
                                </tr>                                
                                <tr>                                  
                                    <td>
                                        <label for="">Função</label>                                    
                                     </td>
                                    <td  colspan="">
                                        <select name="cd_funcao" class="form-control">                                       
                                            <option @if($infoContrato->cd_funcao == 0) selected @endif value=""></option>
                                            <option @if($infoContrato->cd_funcao == 50) selected @endif value="$infoContrato->cd_funcao">Técnico de Video Cirurgia</option>
                                        </select>
                                    </td>    
                                    <td>
                                        <label for="">Unidade</label>                                    
                                        </td>
                                    <td  colspan="">
                                        <select name="nm_unidade" class="form-control">
                                        @foreach($dados['unidades'] as $unidade)
                                            <option 
                                                @if($infoContrato->nm_unidade == $unidade->nm_unidade) selected @endif                                            
                                            value="{{$unidade->cd_codigo}}">{{$unidade->nm_unidade}}
                                            </option>                                        
                                        @endforeach 
                                         </select>
                                    </td>
                                    <td>
                                        <label for="">Status</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <select name="cd_status" class="form-control">
                                            <option @if($infoContrato->cd_status == 0) selected @endif value="0">Inativo</option>	  
                                            <option @if($infoContrato->cd_status == 1) selected @endif value="1">Ativo</option>	  
                                            <option @if($infoContrato->cd_status == 2) selected @endif  value="2">Férias</option>	  
                                            <option @if($infoContrato->cd_status == 3) selected @endif  value="3">Licença</option>	  
                                            <option @if($infoContrato->cd_status == 4) selected @endif  value="4">Demitido</option>	  
                                            <option @if($infoContrato->cd_status == 5) selected @endif  value="5">Treinamento</option>
                                        </select>
                                    </td>                      
                                </tr>
                                <tr>
                                    <td>
                                        <label for="hr_entrada">Hora Entrada</label>                                    
                                    </td>
                                    <td  colspan="">
                                            <input type="time" value="{{$infoContrato->hr_entrada}}" name="hr_entrada" class="form-control">                                        
                                    </td>
                                    <td>
                                            <label for="hr_saida">Hora Saida</label>                                    
                                        </td>
                                        <td  colspan="">
                                                <input type="time" value="{{$infoContrato->hr_saida}}" name="hr_saida" class="form-control">                                        
                                    </td>
                                    <td>
                                            <label for="">Intervalo</label>                                    
                                        </td>
                                        <td  colspan="">                                            
                                            <select name="nm_intervalo" class="form-control">
                                                    <option value=""></option>
                                                    <option @if($infoContrato->nm_intervalo == "1 Hora") selected @endif value="1 Hora">1 Hora</option>
                                                    <option @if($infoContrato->nm_intervalo == "15 minutos") selected @endif value="15 minutos">15 minutos</option>
                                                </select>
                                        </td>                       
                                </tr> 
                                @endforeach

                            </table>
                            <div class="row row-categorias-funcionario">
                                <div class="col-md">
                                    <p class="text-center text-primary text-bold">CONTATOS</p>
                                </div>
                            </div>
                            <table class="table table-sm table-align-left table-hover">
                                <tr>
                                    <td>
                                        <label for="cd_categoria">Tipo de Contato</label>  
                                    </td>
                                    <td>
                                        <label for="cd_categoria">Contato</label>  
                                    </td>
                                    <td>
                                        <label for="cd_categoria">Observações</label>  
                                    </td>
                                    <td>
                                        <label for="cd_categoria">Nome</label>  
                                    </td>
                                    <td>  
                                        <label for="cd_categoria">Parentesco</label>  
                                    </td>
                                    <td class="print-none"> 
                                        <div class="btn btn-primary btn-sm">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div> 
                                    </td>
                                </tr>   
                                <tr>
                                        <td>
                                            <select name="cd_categoria" class="form-control">
                                                <option value="0"></option>
                                                <option value="1">Telefone</option>
                                                <option value="2">Celular</option> 
                                                <option value="3">E-mail</option>                                              
                                                <option value="4">Nextel</option>  
                                                <option value="4">Urgencia</option> 
                                            </select> 
                                        </td>
                                        <td>
                                            <input type="text" name="nm_numero"  class="form-control-sm form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="nm_obs"  class="form-control-sm form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="nm_nome"  class="form-control-sm form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="nm_cargo"  class="form-control-sm form-control">
                                        </td>                                        
                                         
                                    </tr>
                                @foreach($dados['contatos'] as $contato)
                                <tr>
                                    <td>@if($contato->cd_categoria == 1)
                                            Telefone 
                                        @elseif($contato->cd_categoria == 2)
                                            Celular
                                        @elseif($contato->cd_categoria == 3)
                                            Email
                                        @elseif($contato->cd_categoria == 4)
                                            Nextel 
                                        @elseif($contato->cd_categoria == 5)
                                            Urgencia    
                                        @endif
                                        
                                    </td>
                                    <td>
                                            {{$contato->nm_numero}}
                                   </td>
                                    <td>
                                            {{$contato->nm_obs}}
                                    </td>
                                    <td>
                                            {{$contato->nm_nome}}
                                    </td>
                                    <td>
                                            {{$contato->nm_cargo}}
                                     </td>
                                    <td class="print-none">
                                        <div class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                        </div>
                                    </td>                                     
                                </tr>
                                @endforeach
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
