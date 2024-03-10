<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #B1947000; color: white;">
    <a class="navbar-brand" href="{{ route('dashboard') }}">
        <img src="/img/logo.png" style="height: 60px; width: auto">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="nav-item {{ Request::is('guides') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('guides') }}">Guides</a>
            </li>
            <li class="nav-item {{ Request::routeIs('categories') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('categories') }}">Categories</a>
            </li>
            <li class="nav-item {{ Request::is('adoptions') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('adoptions') }}">Adoption</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">Account Settings</a>
                    <a class="dropdown-item" href="{{ route('applications.all') }}">Adoption Applications</a>
                    <div class="dropdown-divider"></div>
                    @auth
                    <form method="POST" action="{{ route('logout') }}" id="logout-form" class="dropdown-item">
                        @csrf
                        <button type="submit" class="btn btn-link p-0">Log Out</button>
                    </form>
                    @endauth
                </div>
            </li>
        </ul>
    </div>
</nav>
