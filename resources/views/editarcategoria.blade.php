@extends('layout.app')

@section('body')
<h1>Editar</h1> 
    <form action="/editarcategoria/{{$cat->id}}" method="POST">
     @csrf
        <input type="text" name="nomecategoria" value="{{$cat->name}}">
        <input type="submit">
    </form>

@endsection
