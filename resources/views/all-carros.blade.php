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
                                <h4 class="card-title">Veja todos seu veículos</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>PLACA</th>
                                                <th>CHASSI</th>
                                                <th>RENAVAM</th>
                                                <th>MONTADORA</th>
                                                <th>MODELO</th>
                                                <th>COR</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @foreach($carros as $key => $res)
                                            <tr>
                                                <td>{{ $res['placa'] }}</td>
                                                <td>{{ $res['chassi'] }}</td>
                                                <td>{{ $res['renavam'] }}</td>
                                                <td>{{ $res['montadora'] }}</td>
                                                <td>{{ $res['modelo'] }}</td>
                                                <td>{{ $res['cor'] }}</td>
                                                <td><a href="{{ route('carro.edit',$res['id']) }}">Editar Registro</a>
                                                <form id="form_{{ $res['id']}}"
                                                action="{{ route('carro.destroy', ['carro' => $res['id']]) }}"
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
                                        <tfoot>
                                            <tr>
                                                <th>PLACA</th>
                                                <th>CHASSI</th>
                                                <th>RENAVAM</th>
                                                <th>MONTADORA</th>
                                                <th>MODELO</th>
                                                <th>COR</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mt-5">
                                        <nav aria-label="Page navigation example">
                                            Paginação: 
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="{{ $carros->previousPageUrl() }}">Anterior</a></li>
                                                
                                                @for($i = 1; $i <= $carros->lastPage(); $i++)
                                                    <li class="page-item {{ $carros->currentPage() == $i ? 'active' : '' }}"><a class="page-link" href="{{ $carros->url($i) }}">{{ $i }}</a></li>
                                                @endfor

                                                <li class="page-item"><a class="page-link" href="{{ $carros->nextPageUrl() }}">Próxima</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>



@endsection
