@extends('layouts.app')

@section('content')

<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Olá, {{ Auth::user()->name }}</h4>
                            <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Quero me deslogar
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Autorola</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Carros</a></li>
                            <li class="breadcrumb-item active"><a href="{{url()->previous()}}">Voltar</a></li>
                        </ol>
                    </div>
                </div>
                <form method="POST" action="{{ route('carro.update', ['carro' => $carro->id]) }}">
                    @csrf
                    @method('PUT');
                    <div class="row">

                        <div class="col-lg-4 mb-3">
                            <label>Placa</label>
                            <input type="text" class="form-control" value="{{ $carro->placa }}" name="placa">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label>Chassi</label>
                            <input type="text" class="form-control" value="{{ $carro->chassi }}" name="chassi">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label>Renavam</label>
                            <input type="text" class="form-control" value="{{ $carro->renavam }}" name="renavam">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label>Montadora</label>
                            <input type="text" class="form-control" value="{{ $carro->montadora }}" name="montadora">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label>Modelo</label>
                            <input type="text" class="form-control" value="{{ $carro->modelo }}" name="modelo">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label>Cor</label>
                            <input type="text" class="form-control" value="{{ $carro->cor }}" name="cor">
                        </div>

                        <div class="col-lg-12 mb-3">
                            <input type="submit" class="btn btn-sucess" value="Salvar dados" style="background: #11bb3d;color: #FFFF;width: 100%;">
                        </div>
                    </div>
                </form>

            </div>
        </div>



@endsection
