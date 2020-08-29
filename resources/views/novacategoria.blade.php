@extends('layout.app')
@section('body')
<h3>Cadastrar</h3> 
<form action="/novacategoria/nova" method="POST">
     @csrf
    <div class="form-row">
        <div form-group col-md-6>
            <label for="categoria">Nova Categoria</label>
            <input type="text" class="form-control" name="nomecategoria">
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
