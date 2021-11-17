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
                            
                        </ol>
                    </div>
                </div>
                <div class="row">
                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Clientes</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Nomes</th>
                                                <th>Email</th>
                                                <th>Endereço</th>
                                                <th>Telefone</th>
                                                <th>Editar</th>
                                                <th>Remover</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($clientes as $key => $res)
                                            <tr>
                                                <td>{{ $res['nome'] }}</td>
                                                <td>{{ $res['email'] }}</td>
                                                <td>{{ $res['endereco'] }}</td>
                                                <td>{{ $res['telefone'] }}</td>
                                                <td><a href="{{ route('cliente.edit', $res['id']) }}">Editar</a></td>
                                                <td>
                                                <form id="form_{{ $res['id']}}"
                                                action="{{ route('cliente.destroy', ['cliente' => $res['id']]) }}"
                                                method="POST">
                                                @method('DELETE')
                                                @csrf                                                
                                                </form>
                                                    <a href="#"
                                                    onclick="document.getElementById('form_{{ $res['id']}}').submit()">Excluir </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <nav aria-label="Page navigation example mt-5">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="{{ $clientes->previousPageUrl() }}">Anterior</a></li>
                                            
                                            @for($i = 1; $i <= $clientes->lastPage(); $i++)
                                                <li class="page-item {{ $clientes->currentPage() == $i ? 'active' : '' }}"><a class="page-link" href="{{ $clientes->url($i) }}">{{ $i }}</a></li>
                                            @endfor

                                            <li class="page-item"><a class="page-link" href="{{ $clientes->nextPageUrl() }}">Próxima</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>



@endsection
