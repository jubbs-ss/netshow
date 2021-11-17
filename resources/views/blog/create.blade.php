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
                        <h1>Cadastrar/ Editar Notícia</h1>
                    </div>
                </div>
                <div class="row">
                <form action ="{{ route('noticia.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="titulo_da_noticia">Título da Notícia</label>
                        <input type="text" class="form-control" id="titulo_da_noticia" placeholder="Título da Notícia">
                    </div>
                    <div class="form-group">
                        <label for="categoria_da_noticia">Categoria</label>
                        <select class="form-control" id="categoria_da_noticia">
                        <option>categoria 1</option>
                        <option>categoria 2</option>
                        <option>categoria 3</option>
                        <option>categoria 4</option>
                        <option>categoria 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="autor_da_noticia">Autor</label>
                        <select multiple class="form-control" id="autor_da_noticia">
                        <option>Autor 1</option>
                        <option>Autor 2</option>
                        <option>Autor 3</option>
                        <option>Autor 4</option>
                        <option>Autor 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="texto_da_noticia">Texto</label>
                        <textarea class="form-control" id="texto_da_noticia" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="imagem_da_noticia">Capa da Notícia</label>
                        <input type="file" class="form-control-file" id="imagem_da_noticia">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Salvar</button>
                </form>
                </div>
            </div>
        </div>
@endsection
