@extends('layout.app')
@section('body')
<h3>Editar</h3> 
     @csrf
    <div class="form-row">
        <div form-group col-md-6>
            <label for="novaanotacao">Anotação</label>
            <input type="text" class="form-control" name="tituloanotacao" value="{{$note->titulo}}">
            <input type="text" class="form-control" name="descricaoanotacao" value="{{$note->descricao}}">
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