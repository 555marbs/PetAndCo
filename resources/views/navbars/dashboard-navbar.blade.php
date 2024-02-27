<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #B1947000;" style="color: white">
    <a class="navbar-brand" href="{{ route('dashboard') }}">Pet&Co.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item" style="text-emphasis-color: rgb(0, 0, 0)">
                <a class="nav-link" href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('guide') }}">Guides</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories') }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('adoptions') }}">Adoption</a>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                    <a class="dropdown-item" href="#">About Us</a>
                    <div class="dropdown-divider"></div>
                    @auth
                        <form method="POST" action="{{ route('logout') }}" id="logout-form">
                            @csrf
                            <button type="submit" class="dropdown-item dropdown-item-logout">Log Out</button>
                        </form>
                    @endauth
                </div>
            </li>
        </ul>
    </div>
</nav>
