@extends('layouts.app')

@section('content')
<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-12 p-md-0">
                        <div class="welcome-text">
                            <h1>INSIRA SUA PLANILA EM .CSV</h1>
                            <p>Para não dar erro na importação insira a lanilha corretamente com os campos informados na criação do sistema.</p>
                            <form charset="utf-8" action="{{route('uploadfileplanilha')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" class="form-control mb-4" name="arquivo">
                                <input type="submit" value="Subir planilha" class="btn btn-success">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>



@endsection
