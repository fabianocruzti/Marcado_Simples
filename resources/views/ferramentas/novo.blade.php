@extends('layout.app')
@section('body')
<h3>Cadastrar</h3> 
<form action="/ferramentas/store" method="get">
     @csrf
    <div class="form-row">
        <div form-group col-md-6>
            <label for="novaanotacao">Nova Anotação</label>
            <input type="text" class="form-control" name="tituloanotacao">
            <input type="text" class="form-control" name="descricaoanotacao">
        </div>
    </div>
    <div class="form-row">
        <div form-group col-md-6>
            <label for=""></label>
            
            <button type="submit" class="form-control btn btn-primary">Cadastrar</button>
        </div>
    </div>
    </form>

@endsection