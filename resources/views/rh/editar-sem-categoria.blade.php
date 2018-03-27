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
                                    <td>
                                        <label for="cd_assistencia_medica_matricula">SCR</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <select name="nr_src" class="form-control">
                                            <option @if($item->nr_scr == 0)selected @endif value="0">Não</option>
                                            <option @if($item->nr_scr == 1)selected @endif value="1">Sim</option>                                                                                        
                                        </select> 
                                    </td>   
                                                          
                                </tr> 
                                <tr>
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
                                        </select></td>
                                     
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
                                
                                <tr>
                                    <td>
                                        <label for="dt_exame_medico">Data Exame Médico</label>                                    
                                    </td>
                                    <td  colspan="">
                                        <input type="text" name="dt_exame_medico" value="{{$item->dt_exame_medico}}" class="form-control-sm form-control">
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
