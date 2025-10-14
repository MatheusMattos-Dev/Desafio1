@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-white border-0">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="mb-0">Minhas Notícias</h5>
                <a href="{{ route('news.create') }}" class="btn btn-primary">
                    <i class="tim-icons icon-simple-add"></i> Nova
                </a>
            </div>
            <form method="GET" class="mt-1">
                <div class="d-flex align-items-center" style="max-width:100%; column-gap:.5rem;">
                    <input
                        type="text"
                        name="q"
                        class="form-control form-control"
                        placeholder="Pesquisar por título ou conteúdo"
                        value="{{ $term }}"
                        style="flex:1 1 auto;">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="tim-icons icon-zoom-split"></i> Buscar
                    </button>
                </div>
            </form>
        </div>
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($news->count())
            <div class="table-responsive">
                <table class="table align-items-center">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Publicado em</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $n)
                        <tr>
                            <td><a href="{{ route('news.show', $n) }}">{{ $n->title }}</a></td>
                            <td>{{ optional($n->published_at)->format('d/m/Y H:i') ?: '-' }}</td>
                            <td class="text-end">
                                <a href="{{ route('news.edit', $n) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('news.destroy', $n) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Remover esta notícia?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $news->links() }}
            @else
            <p class="text-muted mb-0">Nenhum registro encontrado.</p>
            @endif
        </div>
    </div>
</div>
@endsection