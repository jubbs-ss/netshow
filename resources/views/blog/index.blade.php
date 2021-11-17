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
                            <li class="breadcrumb-item"><a>Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Blog</a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h1>Blog</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://www.automaistv.com.br/wp-content/uploads/2020/01/mustang-bullitt-leilao-2020-1-990x660.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Título da Notícia</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-body">
                            <aclass="card-link">Ver Mais</aclass=>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://www.automaistv.com.br/wp-content/uploads/2020/01/mustang-bullitt-leilao-2020-1-990x660.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Título da Notícia</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-body">
                            <aclass="card-link">Ver Mais</aclass=>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://www.automaistv.com.br/wp-content/uploads/2020/01/mustang-bullitt-leilao-2020-1-990x660.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Título da Notícia</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-body">
                            <aclass="card-link">Ver Mais</aclass=>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://www.automaistv.com.br/wp-content/uploads/2020/01/mustang-bullitt-leilao-2020-1-990x660.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Título da Notícia</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-body">
                            <aclass="card-link">Ver Mais</aclass=>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
