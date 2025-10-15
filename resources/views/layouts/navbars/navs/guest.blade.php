<nav class="navbar navbar-expand-lg fixed-top shadow-sm"
  style="background:#fff; border-bottom:1px solid #eee; z-index:1030;">
  <div class="container-fluid d-flex justify-content-between align-items-center">

    <a class="navbar-brand fw-bold" href="{{ route('news.index') }}"
      style="color:#e14eca; font-size:1.1rem;">
      {{ $page ?? 'Painel de Notícias' }}
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarGuest"
      aria-controls="navbarGuest" aria-expanded="false" aria-label="Toggle navigation"
      style="border:none; background:transparent;">
      <span class="navbar-toggler-bar navbar-kebab" style="background:#e14eca;"></span>
      <span class="navbar-toggler-bar navbar-kebab" style="background:#e14eca;"></span>
      <span class="navbar-toggler-bar navbar-kebab" style="background:#e14eca;"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarGuest">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a href="{{ route('login') }}" class="nav-link text-muted"
            style="transition:.3s; font-weight:500;">
            <i class="tim-icons icon-minimal-left" style="color:#ba54f5;"></i>
            {{ __('Voltar para o Login') }}
          </a>
        </li>

        @guest
        <li class="nav-item">
          <a href="{{ route('register') }}" class="nav-link text-muted"
            style="transition:.3s; font-weight:500;">
            <i class="tim-icons icon-laptop" style="color:#ba54f5;"></i>
            {{ __('Criar Conta') }}
          </a>
        </li>
        @endguest

        @auth
        <li class="nav-item">
          <a href="{{ route('profile.edit') }}" class="nav-link text-muted">
            <i class="tim-icons icon-single-02" style="color:#ba54f5;"></i>
            {{ __('Meu Perfil') }}
          </a>
        </li>
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}" class="d-inline">
            @csrf
            <button type="submit" class="nav-link btn btn-link m-0 p-0 text-muted"
              style="transition:.3s; font-weight:500;">
              <i class="tim-icons icon-button-power" style="color:#ba54f5;"></i>
              {{ __('Sair') }}
            </button>
          </form>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>