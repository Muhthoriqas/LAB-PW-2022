<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Blog</a>
        <button class="navbar-toggler" type="button" 
                data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($title === "Home")? 'active' : '' }}" href="/">Home</a>
                <a class="nav-link {{ ($title === "About")? 'active' : '' }}" href="/about">About</a>
                <a class="nav-link {{ ($title === "Blog")? 'active' : '' }}" href="/posts">Blog</a>
                <a class="nav-link {{ ($title === "Category")? 'active' : '' }}" href="/categories">Category</a> 
            </div>

            <div class="navbar-nav">
                @auth
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-journal"></i> My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </button>
                    </form>
                </ul>
                </li>
                @else
                <a class="nav-link {{ ($title === "Login")? 'active' : '' }}
                            btn btn-outline-primary" href="/login"><i class="bi bi-box-arrow-right"></i> Login</a>
                @endauth
            </div>
            
        </div>
    </div>
</nav>