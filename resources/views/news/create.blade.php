@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header"><h5 class="mb-0">Nova Notícia</h5></div>
    <div class="card-body">
      <form method="POST" action="{{ route('news.store') }}">
        @csrf
        <div class="mb-3">
          <label class="form-label">Título</label>
          <input name="title" class="form-control" value="{{ old('title') }}" required>
          @error('title') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Conteúdo</label>
          <textarea name="body" class="form-control" rows="6">{{ old('body') }}</textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">Publicado em (opcional)</label>
          <input type="datetime-local" name="published_at" class="form-control"
                 value="{{ old('published_at') }}">
        </div>
        <a href="{{ route('news.index') }}" class="btn btn-outline-secondary">Cancelar</a>
        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
</div>
@endsection
