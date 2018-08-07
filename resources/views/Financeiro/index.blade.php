@extends('layouts.header')

@section('content')
    

<section class="dashboard-header section-padding">
    <div class="container-fluid">
       
        <div class="row justify-content-center">
          <div class="">
              <div class="card" style="width: 18rem;">
                  
                  <div class="#"> 
                      <div class="text-center">
                          <h6>DATA</h6>
                      </div>
                    <div class="row">
                      <div class="col-sm col-xs-6">                        
                        <div class="btn-group">
                            <button type="button" class="btn text-capitalize btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$datas['mesAtualEscrito'] }}
                            </button>
                            <div class="dropdown-menu">
                              @foreach($datas['meses'] as $meses)
                                <a class="dropdown-item" href="?data={{$datas['anoAtual']}}-{{$meses['numero']}}&diaInicial={{$datas['diaInicial']}}&diaFinal={{$datas['diaFinal']}}&ordem={{$filtros['ordem']}}&area={{$filtros['area']}}">{{$meses['nome']}}</a>
                              @endforeach
                                        
                            </div>
                          </div>
                      </div> 
                        <div class="col-sm col-xs-6 float-right">
                          <div class="btn-group  float-right">
                            <button type="button" class="float-right btn-sm btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{$datas['anoAtual']}}
                            </button>
                            <div class="dropdown-menu">
                              @foreach($datas['anos'] as $anos)
                                <a class="dropdown-item" href="?data={{$anos['numero']}}-{{$datas['mesAtual']}}&diaInicial={{$datas['diaInicial']}}&diaFinal={{$datas['diaFinal']}}&ordem={{$filtros['ordem']}}&area={{$filtros['area']}}">{{$anos['numero']}}</a>
                              @endforeach           
                            </div>                       
                          </div>
                        </div>    
                    </div>  
                    
                    

                    <div class="row row-space">
                      <div class="col-md">
                          <div class="input-group-sm">
                              <input type="text" class="form-control col-sm-5 float-left" placeholder="1">                        
                            </div>
                            
                            <div class="input-group-sm">
                                <input type="text" class="form-control col-sm-5 float-right" placeholder="30">                        
                            </div>
                      </div>
                    </div>

                    <div class="row row-space">
                      <div class="col-md text-center"> 
                        <a class="btn btn-default btn-xs " href="">Anterior</a>    
                        <a class="btn btn-default btn-xs float-center" href="/financeiro">Atual</a>
                        <a class="btn btn-default btn-xs " href="">Pŕoximo</a>
                      </div>  
                    </div>             
                        
                  </div>
                  
                  
                </div>
          </div>
        </div>
      <div class="row d-flex">
        
        <table  class=" table table-sm no-padding table-striped table-bordered table-hover" id="tabelaprincipal">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  id
                </th>
                <th>
                  <div class="">
                      <ul class="nav nav-tabs nav-hr">
                        <li class="dropdown ">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          <span class="filtro-hr bold"> áreas </span> <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li>
                              <a href="#">Todos</a>
                            </li>                              
                          </ul>
                        </li>
                      </ul>
                    </div>
                </th>
              </tr>
              
            </thead>
            <tbody>
              <span class="invisible">   {{($i = 1)}} </span>
             
                @foreach($contas as $conta) 
          
                <tr  class="point">

                  <td class="text-center" onclick="window.location='/financeiro/editar/{{$conta->id}}/2018-08';">
                    {{$i++}} 
                  </td>
                  <td>
                    {{$conta->id}}
                </td>
                  <td style= "white-space: nowrap;" onclick="window.location='/financeiro/editar/{{$conta->id}}/2018-08';">
                    {{$conta->area}}
                  </td>
                  <td onclick="window.location='/financeiro/editar/{{$conta->id}}/2018-08';">
                    {{$conta->ccustos}}
                  </td>
                  <td onclick="window.location='/financeiro/editar/{{$conta->id}}/2018-08';">
                    {{$conta->tipo}}
                  </td>
                  <td style="background-color:{{$conta->cor_tipo_pagamento}}">  
                    @if($conta->cor_tipo_pagamento == "")               
                    <input type="checkbox">
                    @endif
                  </td>
                  <td style= "white-space: nowrap;" onclick="window.location='/financeiro/editar/{{$conta->id}}/2018-08';">
                    <span class='bold'>{{$conta->favorecido}}</span> - {{$conta->item}}
                    <span class='bold azul'> 
                  </td>
                  <td class="text-right" onclick="window.location='/financeiro/editar/{{$conta->id}}/2018-08';">
                    {{$conta->pagador}}
                  </td>
                  <td class="text-center" onclick="window.location='/financeiro/editar/{{$conta->id}}/2018-08';">
                    {{$conta->dia}}
                  </td>
                  <td class="text-right" onclick="window.location='/financeiro/editar/{{$conta->id}}/2018-08';">
                    @if($conta->tipo != "Extra"){{$conta->valor}}@endif
                  </td>
                  <td class="text-right" onclick="window.location='/financeiro/editar/{{$conta->id}}/2018-08';">
                    @if($conta->tipo == "Extra"){{$conta->valor}}@endif
                  </td>
                </tr>
                @endforeach
                
              
              <tr class="trcolor">
                <td colspan="7" ></td >
                <td class="azulclaro" colspan="2">
                  <span class="bold  numaior direita">TOTAL DO MÊS</span>
                </td>
                <td></td>
                <td class="azulclaro" colspan="1">
                  <span class="bold numaior  azul">
                    <p class="centronum">{$totalsomames}</p>
                  </span>
                </td>
              </tr>
              <tr class="trcolor">
                <td colspan="8" > Total de pendencias: </td>
                <td class="" colspan="1">
                  <span class="direita">Total pago</span>
                </td>
                <td></td>
                <td class="">
                  <span class="direita">{$totalpago}</span>
                </td>
              </tr>
              <tr class="trcolor">
                <td colspan="6" ></td>
                <td class="" colspan="1">
                  <span class="direita">A pagar</span>
                </td>
                <td></td>
                <td class="">
                  <span class="direita">{$apagar}</span>
                </td>
              </tr>
              <tr class="trcolor">
                <td colspan="5" ></td >
                <td class="azulclaro" colspan="2">
                  <span class="bold  numaior direita">TOTAL ESTIMADO</span>
                </td>
                <td></td>
                <td class="azulclaro" colspan="1">
                  <span class="bold numaior  azul">
                    <p class="centronum">{$TOTALESTIMADO}</p>
                  </span>
                </td>
              </tr>
              <tr class="trcolor">
                <td colspan="4" >
                  <span>¹Parcelamento com valor variável</span>
                </td>
              </tr>
              <tr></tr>
            </tbody>
          </table>

      </div>
    </div>
</section>

  
<style>
  .row-space{
    margin-top:7px;
  }
    .point{
        cursor: pointer;
    }
        .row-ecra{
        margin-bottom:5px;
        }
        .a-black{
        color:black;
        }
        .a-black:hover{
        color:black;
        }
        .nav-tabs > li > a {
        margin-right: 0px;
        line-height: 0;
        border: 0px solid transparent;
        border-radius: 0px 0px 0 0;
        }
        bootstrap.css:3986
        .nav > li > a {
        position: relative;
        display: block;
        padding: 10px 0px;
        }
        .filtro-hr{
        color:black;
        font-size:12px;
        }
        .nav > li > a {
        position: relative;
        display: block;
        padding: 10px 3px;
        }
        .nav-hr {
        border-bottom: 0px solid #ddd;
        }
      </style>


@endsection