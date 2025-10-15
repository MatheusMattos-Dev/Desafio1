@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Meu Perfil</h5>
        </div>

        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success mb-3">{{ session('status') }}</div>
          @endif

          <div class="d-flex align-items-center mb-4">
            @php
              $photoPath = auth()->user()->profile_photo_path;
              $photoUrl = $photoPath ? asset('storage/'.$photoPath) : 'https://ui-avatars.com/api/?name='.urlencode(auth()->user()->name).'&background=e14eca&color=fff';
            @endphp

            <img src="{{ $photoUrl }}" alt="Foto de perfil"
                 class="rounded-circle mr-3" style="width:80px;height:80px;object-fit:cover;">

            <form action="{{ route('profile.photo') }}" method="POST" enctype="multipart/form-data" class="d-flex align-items-center">
              @csrf
              <input type="file" name="photo" accept="image/*" class="form-control-file" required>
              <button class="btn btn-primary" type="submit">Alterar</button>
            </form>
          </div>

          @error('photo')
            <div class="text-danger small mb-3">{{ $message }}</div>
          @enderror

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="text-muted mb-1">Nome</label>
              <div class="form-control-plaintext font-weight-bold">{{ auth()->user()->name }}</div>
            </div>
            <div class="col-md-6 mb-3">
              <label class="text-muted mb-1">E-mail</label>
              <div class="form-control-plaintext font-weight-bold">{{ auth()->user()->email }}</div>
            </div>
            <div class="col-md-6 mb-3">
              <label class="text-muted mb-1">Desde</label>
              <div class="form-control-plaintext">{{ auth()->user()->created_at?->format('d/m/Y H:i') }}</div>
            </div>
          </div>

          <small class="text-muted">Em breve: edição de dados e outras preferências.</small>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
