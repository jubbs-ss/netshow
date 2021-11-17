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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Cotação</a></li>
                        </ol>
                    </div>
                </div>
                <form method="POST" action="{{ route('cotacao.store') }}">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12 mb-3">
                            <label>Cliente</label>
                            <select required class="form-control" name="cliente_id">

                                @foreach($clientes as $key => $res)
                                    <option value="{{$res['id']}}">{{$res['nome']}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label>Carro</label>
                            <select required class="form-control" name="carro_id">
                                @foreach($carros as $key => $res)
                                    <option value="{{$res['id']}}">{{$res['modelo']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label>Data da Locação</label>
                            <input type="date" required class="form-control" name="data_locacao">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label>Data da Devolução</label>
                            <input type="date" required class="form-control" name="data_devolucao">
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label>Condutor</label>
                            <input type="text" required class="form-control" name="condutor">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label>Email do Condutor</label>
                            <input type="text" required class="form-control" name="email_condutor">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label>Canal de Venda da Proposta</label>
                            <input type="text" required class="form-control" name="canal_de_vendas">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label>Status do Contrato</label>
                            <select required class="form-control" name="status">
                                <option value="1">Vigente</option>
                                <option value="2">Aguardando extensão</option>
                                <option value="3">Aguardando renovação</option>
                                <option value="4">Aguardando ligação</option>
                                <option value="5">Aguardando venda</option>
                                <option value="6">Aguardando desmobilização</option>
                                <option value="7">Finalizado</option>
                            </select>
                        </div>


                        <div class="col-lg-12 mb-3">
                            <input type="submit" class="btn btn-sucess" value="Salvar dados" style="background: #11bb3d;color: #FFFF;width: 100%;">
                        </div>
                    </div>
                </form>

            </div>
        </div>



@endsection
