@extends('layouts.app')

@section('content')
    

    <div class="row g-5">
    <div class="col-md-12">
        <h4 class="mb-3">Insira os dados corretamente.</h4>
        <form method="POST" action="{{route('pessoa.store')}}" class="needs-validation">
            @csrf
          <div class="row g-3">
            <div class="col-sm-12  mt-4">
              <label  class="form-label">Seu nome</label>
              <input type="text" class="form-control" name="nome" placeholder="" value="" required>
            </div>

            <div class="col-sm-6  mt-4">
              <div class="input-group">
                <span class="input-group-text">@</span>
                <input type="email" class="form-control" name="email" placeholder="Insira seu E-mail" required>
              </div>
            </div>

            <div class="col-sm-6  mt-4">
              <div class="input-group">
                <span class="input-group-text">#</span>
                <input type="text" class="form-control" name="telefone" placeholder="Insira seu Telefone" required>
              </div>
            </div>
            
            <div class="col-sm-12  mt-4">
              <label  class="form-label">Escreva sua mensagem</label>
              <textarea  class="form-control" name="mensagem" required></textarea>
            </div>

            <div class="col-sm-12 mt-4">
              <label  class="form-label">Anexe seu arquivo</label><br />
              <input type="file" name="arquivo" required>
            </div>
          </div>
            <input type="hidden" name="ip"  value="{{Request::ip()}}">
          <button class="w-100 btn btn-primary btn-lg mt-4" type="submit">Salvar dados</button>
        </form>
      </div>
        
        
      
    </div>


@endsection