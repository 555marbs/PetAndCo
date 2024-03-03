<nav class="navbar navbar-expand-lg navbar-light transparent-navbar">
    <a class="navbar-brand">
        <img src="/img/logo-white.png" style="height: 60px; width: auto">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
            </li>
        </ul>
    </div>
</nav>

<button class="btn btn-primary bottom-button btn-adopt-now" onclick="window.location.href='{{ route('register')}}'">Adopt Now!</button>
