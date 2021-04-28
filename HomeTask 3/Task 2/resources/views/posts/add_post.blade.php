@extends('layout')

@section('content')
<form action="{{route('add_post')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="titleInput" class="form-label">Заголовок</label>
        <input type="text" class="form-control" id="titleInput" name="title" placeholder="Заголовок">
    </div>
    <div class="mb-3">
        <label for="contentInput" class="form-label">Текст поста</label>
        <textarea class="form-control" id="contentInput" name="content" rows="5" placeholder="Текст"></textarea>
    </div>
    <div class="mb-3">
        <label for="dateInput" class="form-label">Дата</label>
        <input type="text" class="form-control" id="titleInput" name="date" placeholder="dd.mm.yyyy">
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    
@endif
@endsection
