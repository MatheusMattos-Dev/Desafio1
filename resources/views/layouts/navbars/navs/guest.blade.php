<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent fixed-top">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-toggle d-inline">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <a class="navbar-brand" href="{{ route('news.index') }}">
        {{ $page ?? 'Painel de Notícias' }}
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>

    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="{{ route('news.index') }}" class="nav-link text-primary">
            <i class="tim-icons icon-minimal-left"></i> {{ __('Voltar para Tela de Login') }}
          </a>
        </li>

        @guest
          <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link">
              <i class="tim-icons icon-laptop"></i> {{ __('Criar conta') }}
            </a>
          </li>
        @endguest

        @auth
          <li class="nav-item">
            <a href="{{ route('profile.edit') }}" class="nav-link">
              <i class="tim-icons icon-single-02"></i> {{ __('Meu Perfil') }}
            </a>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
              @csrf
              <button type="submit" class="nav-link btn btn-link m-0 p-0">
                <i class="tim-icons icon-button-power"></i> {{ __('Sair') }}
              </button>
            </form>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
