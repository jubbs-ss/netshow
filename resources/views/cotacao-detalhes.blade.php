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
                            <li class="breadcrumb-item active"><a href="{{url()->previous()}}">Voltar</a></li>
                        </ol>
                    </div>
                </div>

                <form method="POST" action="{{ route('carro.store') }}">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12 mb-3" id="imprimeCotacao">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">DADOS DO CLIENTE</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>NOME</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>({{$dados[0]->cliente_id}}) {{ $dados[0]->nome }}</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="card">

                                <div class="card-header">
                                    <h5 class="card-title">DADOS DO VEÍCULO</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>MODELO</th>
                                                <th>PLACA</th>
                                                <th>MONTADORA</th>
                                                <th>CHASSI</th>
                                                <th>RENAVAM</th>
                                                <th>COR</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $dados[0]->modelo }}</td>
                                                <td>{{ $dados[0]->placa }}</td>
                                                <td>{{ $dados[0]->montadora }}</td>
                                                <td>{{ $dados[0]->chassi }}</td>
                                                <td>{{ $dados[0]->renavam }}</td>
                                                <td>{{ $dados[0]->cor }}</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>

                            </div>

                            <div class="card" >

                                <div class="card-header">
                                    <h5 class="card-title">DADOS DO COTAÇÃO</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>DATA DA LOCAÇÃO</th>
                                                <th>DATA DA DEVOLUÇÃO</th>
                                                <th>CONDUTOR</th>
                                                <th>EMAIL DO CONDUTOR</th>
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ date('d-m-Y', strtotime($dados[0]->data_locacao)) }}</td>
                                                <td>{{ date('d-m-Y', strtotime($dados[0]->data_devolucao)) }}</td>
                                                <td>{{ $dados[0]->condutor }}</td>
                                                <td>{{ $dados[0]->email_condutor }}</td>
                                                <td>{{ $status }}</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>

                            <div class="card" >

                                <div class="card-header">
                                    <h5 class="card-title">HISTÓRICO</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Anotações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $dados[0]->msg_alteracao?></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                                <div class="card-footer d-sm-flex justify-content-between">
                                    <div class="card-footer-link mb-4 mb-sm-0">
                                        <p class="card-text text-dark d-inline">
                                            <a href="{{route('cotacoes')}}" style="color:#333"><i class="fas fa-undo-alt"></i> Ver minhas cotações</a>
                                            <a href="javascript:PrintDiv('imprimeCotacao')" style="color:#333"><i class="fas fa-print"></i> IMPRIMIR COTAÇÃO</a></p>
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
