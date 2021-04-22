<header>
    <nav class="main-header navbar navbar-expand navbar-dark navbar-dark justify-content-between">
        <!-- Left navbar links -->
        <ul class="navbar-nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{-- {{ Auth::user()->name }} --}}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              {{-- <a class="dropdown-item" href="{{ route('logout') }}">Log out</a>   --}}
            </div>
          </div>
    </nav>
</header>