@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header d-flex justify-content-between">
      <h5 class="mb-0">{{ $news->title }}</h5>
      <a href="{{ route('news.edit', $news) }}" class="btn btn-warning btn-sm">Editar</a>
    </div>
    <div class="card-body">
      <p class="text-muted">
        Publicado em: {{ optional($news->published_at)->format('d/m/Y H:i') ?: '-' }}
      </p>
      <div>{!! nl2br(e($news->body)) !!}</div>
    </div>
  </div>
</div>
@endsection
