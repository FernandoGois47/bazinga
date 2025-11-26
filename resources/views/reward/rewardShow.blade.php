@extends ('layout')
@section ('content')

@if(session()->has('message'))
{{session()->get('message')}}
@endif
<form action="{{route('reward.destroy',  $reward->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <legend>Mostrar Categoria</legend>
    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Nome</label>
        <input type="text" id="disableTextInput" name="name" class="form-control" value="{{$reward->name}}" readonly>
    </div>
    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Descrição</label>
        <input type="text" id="disableTextInput" name="description" class="form-control" value="{{$reward->description}}" readonly>
    </div>
    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Pontos necessários</label>
        <input type="text" id="disableTextInput" name="required_points" class="form-control" value="{{$reward->required_points}}" readonly>
    </div>
    <button type="submit" class="btn btn-danger">Excluir</button>
</form>
@endsection