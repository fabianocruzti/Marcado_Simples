@extends('layout.app')
@section('body')
<h3>Cadastrar</h3> 

  <form action="/store" method="post">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="produto">Novo Produto</label>
            <input type="text" class="form-control" placeholder="Produto" name="nomeproduto">
          </div>

          <div class="form-group col-md-6">
            <label for="produto">Saldo</label>
            <input type="text" class="form-control" placeholder="Saldo" name="saldoproduto">
          </div>
        </div>
        <div class="form-row"> 
          <div class="form-group col-lg-12">
            <label for="produto">Descrição</label>
            <input type="text" class="form-control" placeholder="Descrição" name="descricaoproduto">
          </div>            
            
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </div>
       
  </form>




@endsection
