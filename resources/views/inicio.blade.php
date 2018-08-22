@extends('layouts.header')

@section('content')
    

<section class="dashboard-header section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">                
                <h2>SEJA BEM VINDO</h2>
            </div>
        </div>
      <div class="row d-flex">
        <div class="col-lg-3">          
            <a href="{{ route('funcionarios') }}">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>FUNCIONARIOS</h4>
                    </div>
                    <div class="card-body">
                        <img class="img-fluid" src="{{ URL::asset('/img/teamwork.jpg') }}" alt="">
                    </div>
                </div>
            </a>
        </div>
      </div>
    </div>
</section>















@endsection