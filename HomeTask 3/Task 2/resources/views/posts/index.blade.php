@extends('layout')

@section('title')
    'Главная страница'
@endsection

@section('content')
    @foreach ($posts as $post)
    <div class="card my-2">
      <div class="card-header">
        <h5 class="card-title">{{$post->title}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$post->date}}</h6>
      </div>
      <div class="card-body">
        <p class="card-text">{{$post->content}}</p>
      </div>
      <div class="card-footer">
        <a class="nav-link" href="{{route('change_post', $post->id)}}">Изменить пост</a>
      </div>
    </div>
    @endforeach
@endsection