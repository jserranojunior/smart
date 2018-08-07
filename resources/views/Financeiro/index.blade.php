@extends('layouts.header')

@section('content')
    

<section class="dashboard-header section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">                
                <h3>FINANCEIRO </h3>
            </div>
        </div>
      <div class="row d-flex">
        
        <table  class=" table table-sm no-padding table-striped table-bordered table-hover" id="tabelaprincipal">
            <thead>
              <tr>
              
            </thead>
            <tbody>
              <span class="invisible">   {{($i = 1)}} </span>
              
                @foreach($contas as $conta) 
                <tr  class="point" onclick="window.location='/financeiro/editar/{{$conta->id}}/2018-08';">
                    
                  <td class="text-center">
                    {{$i++}} 
                  </td>
                  <td>
                    {{$conta->id}}
                </td>
                  <td style= "white-space: nowrap;">
                    {{$conta->area}}
                  </td>
                  <td>
                    {{$conta->ccustos}}
                  </td>
                  <td>
                    {{$conta->tipo}}d
                  </td>
                  <td>                 
                    x{{$conta->tipo_pagamento}}
                  </td>
                  <td style= "white-space: nowrap;">
                    <span class='bold'>{{$conta->favorecido}}</span> - {{$conta->item}}
                    <span class='bold azul'> 
                  </td>
                  <td class="text-right">
                    {{$conta->pagador}}
                  </td>
                  <td class="text-center">
                    {{$conta->dia}}
                  </td>
                  <td class="text-right">
                    @if($conta->tipo != "Extra"){{$conta->valor}}@endif
                  </td>
                  <td class="text-right">
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