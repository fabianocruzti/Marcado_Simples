@extends('layout.app')
@section('body')
<h3>Editar</h3> 

  <form action="/store" method="post">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="produto">Produto</label>
            <input type="text" class="form-control" placeholder="Produto" name="nomeproduto" value="{{$item->name}}">
          </div>

          <div class="form-group col-md-6">
            <label for="produto">Saldo</label>
            <input type="text" class="form-control" placeholder="Saldo" name="saldoproduto" value="{{$item->saldo}}">
          </div>
        </div>
        <div class="form-row"> 
          <div class="form-group col-lg-12">
            <label for="produto">Descrição</label>
          <input type="text" class="form-control" placeholder="Descrição" name="descricaoproduto" value="{{$item->descricao}}">
          </div>            
            
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </div>
       
  </form>




@endsection
