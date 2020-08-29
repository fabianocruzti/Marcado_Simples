@extends('layout.app')

@section('body')
    <h3>Anotações</h3> 

<table>
    <thead>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>Ações</th>
        
    </thead>
<tbody>
@foreach ($note as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->titulo}}</td>
    <td>{{$item->descricao}}</td>
    <td><a href="/ferramentas/editar/{{$item->id}}">Editar</a></td>
    <td><a href="/ferramentas/apagar/{{$item->id}}">Excluir</a></td>
</tr>
@endforeach
<tr>
    
    <td><a href="/ferramentas/novo" type="button" class="btn btn-primary" > Novo</button></td>
</tr>    
</tbody>
</table>

  
@endsection