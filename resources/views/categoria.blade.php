@extends('layout.app')

@section('body')
    <h3>Categoria</h3> 
    <a href="/novacategoria">Cadastro</a> 
<table class="table">
    <thead class="thead-light">
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
        <th></th>
        
    </thead>
<tbody>
@foreach ($categoria as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td><a href="/editarcategoria/editar/{{$item->id}}">Editar</a></td>
    <td><a href="/categorias/apagar/{{$item->id}}">Excluir</a></td>
</tr>
@endforeach
</tbody>
</table>

  
@endsection

