@php
    $pageSlug = $pageSlug ?? '';
@endphp

<div class="sidebar" style="max-height:77%;">
  <div class="sidebar-wrapper">
    <div class="logo">
      <a href="{{ route('news.index') }}" class="simple-text logo-mini">D1</a>
      <a href="{{ route('news.index') }}" class="simple-text logo-normal">Painel de Notícias</a>
    </div>

    <ul class="nav">
      <li @class(['active' => $pageSlug === 'news'])>
        <a href="{{ route('news.index') }}">
          <i class="tim-icons icon-bullet-list-67"></i>
          <p>{{ __('Notícias') }}</p>
        </a>
      </li>

      <li @class(['active' => $pageSlug === 'profile'])>
        <a href="{{ route('profile.edit') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>{{ __('Meu Perfil') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
