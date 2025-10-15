@extends('layouts.app', ['class' => 'register-page', 'page' => __('Registro'), 'contentClass' => 'register-page'])

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:20vh;">
  <div class="col-lg-4 col-md-6">
    <div class="card card-register card-white shadow-sm border-0">

      {{-- Cabeçalho --}}
      <div class="card-header text-center border-0 bg-white pt-4 pb-2">
        <img
          src="{{ asset('images/news-login.png') }}" alt="Notícias"
          style="width:auto;margin-bottom:.5rem;" onerror="this.style.display='none';"
        >
        <large class="text-muted">{{ __('Preencha seus dados para continuar') }}</large>
      </div>

      {{-- Formulário --}}
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card-body px-4">

          {{-- Nome --}}
          <div class="input-group input-group-sm mb-3 {{ $errors->has('name') ? ' has-danger' : '' }}">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="tim-icons icon-single-02"></i></div>
            </div>
            <input
              type="text" name="name" value="{{ old('name') }}"
              class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
              placeholder="{{ __('Seu nome completo') }}" required
            >
            @include('alerts.feedback', ['field' => 'name'])
          </div>

          {{-- E-mail --}}
          <div class="input-group input-group-sm mb-3 {{ $errors->has('email') ? ' has-danger' : '' }}">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="tim-icons icon-email-85"></i></div>
            </div>
            <input
              type="email" name="email" value="{{ old('email') }}"
              class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
              placeholder="{{ __('Seu e-mail') }}" required
            >
            @include('alerts.feedback', ['field' => 'email'])
          </div>

          {{-- Senha --}}
          <div class="input-group input-group-sm mb-3 {{ $errors->has('password') ? ' has-danger' : '' }}">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="tim-icons icon-lock-circle"></i></div>
            </div>
            <input
              type="password" name="password"
              class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
              placeholder="{{ __('Crie uma senha') }}" required
            >
            @include('alerts.feedback', ['field' => 'password'])
          </div>

          {{-- Confirmar senha --}}
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="tim-icons icon-lock-circle"></i></div>
            </div>
            <input
              type="password" name="password_confirmation"
              class="form-control"
              placeholder="{{ __('Confirmar senha') }}" required
            >
          </div>

          {{-- Termos (opcional) --}}
          <div class="text-center">
            <div class="form-check d-inline-flex align-items-center">
              <input
                class="form-check-input me-2 {{ $errors->has('agree_terms_and_conditions') ? ' is-invalid' : '' }}"
                type="checkbox" name="agree_terms_and_conditions" id="agree"
                {{ old('agree_terms_and_conditions') ? 'checked' : '' }}
              >
              <label for="agree">
                {!! __('Eu li e concordo com os <a href="#">termos de uso</a>.') !!}
              </label>
            </div>
            @include('alerts.feedback', ['field' => 'agree_terms_and_conditions'])
          </div>

        </div>

        {{-- Footer --}}
        <div class="card-footer px-4 pb-4">
          <button type="submit"
            class="btn btn-primary btn-block btn-round"
            style="background:linear-gradient(90deg,#e14eca,#ba54f5);border:none;">
            {{ __('CRIAR CONTA') }}
          </button>
          <div class="text-center mt-3">
            <small class="text-muted">{{ __('Já tem conta?') }}</small>
            <a href="{{ route('login') }}" class="link footer-link">{{ __('Entrar') }}</a>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
