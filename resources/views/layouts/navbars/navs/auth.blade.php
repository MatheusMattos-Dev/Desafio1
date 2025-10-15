<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper d-none">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="#">{{ $page ?? __('Dashboard') }}</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link d-flex align-items-center" data-toggle="dropdown" style="gap: .5rem;">
                        <div class="photo">
                            @php
                            $user = auth()->user();
                            $photoPath = $user->profile_photo_path ?? null;
                            $photoUrl = $photoPath
                            ? asset('storage/' . $photoPath)
                            : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&background=e14eca&color=fff';
                            $firstName = explode(' ', trim($user->name))[0] ?? $user->name;
                            @endphp

                            <img src="{{ $photoUrl }}" alt="Foto de perfil"
                                class="rounded-circle"
                                style="width:33px; height:33px; object-fit:cover; border:2px solid #e14eca;">
                        </div>

                        <span class="text-dark font-weight-bold d-none d-lg-inline">
                            {{ ucfirst($firstName) }}
                        </span>

                        <b class="caret d-none d-lg-block d-xl-block" style="margin-left:15px;"></b>
                        <p class="d-lg-none mb-0">{{ __('Perfil') }}</p>
                    </a>
                    <ul class="dropdown-menu dropdown-navbar" style="margin-left:71px;">
                        <li class="nav-link">
                            <a href="{{ route('profile.edit') }}" class="nav-item dropdown-item">{{ __('Profile') }}</a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-link">
                            <a href="{{ route('logout') }}" class="nav-item dropdown-item" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="separator d-lg-none"></li>
            </ul>
        </div>
    </div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="{{ __('SEARCH') }}">
                <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('Close') }}">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>
        </div>
    </div>
</div>