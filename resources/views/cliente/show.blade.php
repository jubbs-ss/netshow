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

                <form method="POST" action="{{ route('carro.store') }}">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">{{ $cliente->nome }}</h5>
                                </div>
                                <div class="card-body">
                                <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Endereço</th>
                                                <th>Telefone</th>
                                                <th>Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $cliente->nome }}</td>
                                                <td>{{ $cliente->email }}</td>
                                                <td>{{ $cliente->endereco }}</td>
                                                <td>{{ $cliente->telefone }}</td>
                                                <td><a href="{{ route('cliente.edit', $cliente->id) }}">Editar</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer d-sm-flex justify-content-between">
                                    <div class="card-footer-link mb-4 mb-sm-0">
                                        <p class="card-text text-dark d-inline"><a href="{{route('listCliente')}}">Ver lista completa</a></p>
                                    </div>

                                    <a href="{{url()->previous()}}" class="btn btn-primary">Voltar para página anterior</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </form>

            </div>
        </div>



@endsection
