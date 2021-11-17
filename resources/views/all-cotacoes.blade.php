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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Cotações</a></li>

                        </ol>
                    </div>
                </div>

                <?php

                        if(isset($_GET['registros']))
                        {
                            echo '
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="card">
                                        <div class="stat-widget-one card-body">
                                            <div class="stat-icon d-inline-block">

                                                <i class="far fa-thumbs-up text-success border-success"></i>
                                            </div>
                                            <div class="stat-content d-inline-block">
                                                <div class="stat-text">INSERIDOS NO SISTEMA</div>
                                                <div class="stat-digit">'.$_GET['registros'].'</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="card">
                                        <div class="stat-widget-one card-body">
                                            <div class="stat-icon d-inline-block">
                                                <i class="fas fa-exclamation-triangle text-primary border-primary"></i>
                                            </div>
                                            <div class="stat-content d-inline-block">
                                                <div class="stat-text">FALHAS AO INSERIR</div>
                                                <div class="stat-digit">'.$_GET['falhas'].'</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>';
                        }


                    ?>

                <form action="{{route('cotacoes')}}" method="GET">

                    <div class="row my-4">
                        <div class="col-sm-12">
                            <h5>Pesquise aqui o que está procurando.</h5>
                        </div>
                        <div class="col-sm-5">
                            <select class="form-control" onchange="validaBusca(this)" name="campo">
                                <option value="placa">Placa</option>
                                <option value="nome">Cliente</option>
                                <option value="cliente_id">Código</option>
                                <option value="Condutor">Condutor</option>
                                <option value="status">Status do contrato</option>
                            </select>
                            <small><a href="{{route('cotacoes')}}">Limpar filtros</a></small>
                        </div>
                        <div class="col-sm-5" id="trocaModo">
                            <input type="text" class="form-control" placeholder="Digite o termo para sua busca" name="valor">
                        </div>
                        <div class="col-sm-2 text-right">
                            <input type="submit" class="btn btn-success" value="Realizar Pesquisa">
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="example" class="table student-data-table m-t-20" style="min-width: 100%">
                                <thead>
                                    <tr>
                                        <th>CARRO</th>
                                        <th>CLIENTE</th>
                                        <th>DATAS</th>
                                        <th>CONDUTOR</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($cotacao as $key => $res)
                                    <tr>

                                        <td>{{ $res->modelo }}<br /><small>{{ $res->placa }}</td>
                                        <td>({{ $res->cliente_id }}) {{ $res->nome }}</td>
                                        <td>Locação: {{ date('d-m-Y', strtotime($res->data_locacao)) }}  Devolução: {{ date('d-m-Y', strtotime($res->data_devolucao)) }}</td>
                                        <td>{{ $res->condutor }}<br /><small>{{ $res->email_condutor }}</small></td>
                                        <td style="width:60px"><a title="Editar registro" href="{{ route('cotacao.edit',$res->id) }}"><i class="fas fa-edit"></i></a>
                                            <a title="Ver registro" href="{{ route('cotacao.show',$res->id) }}"><i class="fas fa-eye"></i></a>

                                        <form id="form_{{ $res->id}}"
                                        action="{{ route('cotacao.destroy', ['cotacao' => $res->id]) }}"
                                        method="POST">
                                        @method('DELETE')
                                        @csrf
                                        </form>
                                            <a title="Excluir registro" href="#"
                                            onclick="document.getElementById('form_{{ $res->id}}').submit()"><i class="fas fa-trash-alt"></i> </a>

                                            <a href="" onclick="$('#historico_anotacao').val({{ $res->id}})" data-toggle="modal" data-target="#myModal"><i class="fas fa-comment-dots"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <nav aria-label="Page navigation example">
                                    Paginação:
                                    <ul class="pagination" style="overflow: scroll;">
                                        <li class="page-item"><a class="page-link" href="{{ $cotacao->previousPageUrl() }}">Anterior</a></li>

                                        @for($i = 1; $i <= $cotacao->lastPage(); $i++)
                                            <li class="page-item {{ $cotacao->currentPage() == $i ? 'active' : '' }}"><a class="page-link" href="{{ $cotacao->url($i) }}">{{ $i }}</a></li>
                                        @endfor

                                        <li class="page-item"><a class="page-link" href="{{ $cotacao->nextPageUrl() }}">Próxima</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



@endsection
