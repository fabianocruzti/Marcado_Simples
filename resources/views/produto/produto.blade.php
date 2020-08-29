<div>
@extends('layout.app')
</div>
@section('body')
    <h3>Produto</h3>  
    <a href="produto/create">Cadastro</a> 


<table class="table">
<thead class="thead-light">
    <tr>
        
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Acoes </a> 
        <th scope="col"> </a> 
        
</tr>
<tbody>
@foreach ($pr as $item)

<tr>
    
    <td>{{$item->name}}</td>
    <td>{{$item->descricao}}</td>
    <td><a href="produto/editar/{{$item->id}}">Editar</a>    
    <td><a href="produto/apagar/{{$item->id}}">Excluir</a>    

</tr>

@endforeach
</tbody>
</table>
</div>
@endsection



