@extends('layouts.app', ['class' => 'login-page', 'page' => __('Login'), 'contentClass' => 'login-page'])

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 90vh;">
        <div class="col-lg-4 col-md-6">
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="card card-login card-white shadow-sm border-0 text-center">
                    {{-- Cabeçalho com ícone centralizado --}}
                    <img src="{{ asset('images/news-login.png') }}" alt="Notícias" style="width: auto;"
                        onerror="this.style.display='none';">
                    <large class="text-muted">{{ __('Acesse sua conta para continuar') }}</large>
                    {{-- Corpo do card --}}
                    <div class="card-body px-4 pb-2">
                        {{-- E-mail --}}
                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('E-mail') }}" required autofocus>
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>

                        {{-- Senha --}}
                        <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }} mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('Senha') }}" required>
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>

                        {{-- Lembrar-me --}}
                        <div class="form-check d-flex justify-content-center align-items-center mt-3">
                            <input class="form-check-input me-2" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }} style="transform: scale(1.1);">
                            <label class="form-check-label mb-0" for="remember">{{ __('Manter conectado') }}</label>
                        </div>
                    </div>

                    {{-- Rodapé --}}
                    <div class="card-footer px-4 pb-4">
                        <button type="submit" class="btn btn-primary btn-block mb-3">{{ __('Entrar') }}</button>
                        @if (Route::has('register'))
                            <div class="text-center">
                                <small class="text-muted">{{ __('Ainda não tem conta?') }}</small>
                                <a href="{{ route('register') }}" class="link footer-link">{{ __('Criar conta') }}</a>
                            </div>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
