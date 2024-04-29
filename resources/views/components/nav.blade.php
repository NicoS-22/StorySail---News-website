<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center ">
                <a class="txtLogo mainTxt text-decoration-none titleTxt" href="{{ route('home') }}"><img
                        src="/img/logoNav.png" class="ms-3 logoCus" alt="logoName">StorySail</a>
            </div>
            <div class="d-flex justify-content-center ">
                <p class="mainTxt subtitleCus display-5 fs-2 text-capitalize"><span class="accentTxt">P</span>er <span
                        class="accentTxt">N</span>avigare <span class="accentTxt">I</span>nformati</p>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navCus">
    <div class="container-fluid">
        <div class="d-flex justify-content-start">
            @auth
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-4">
                    <li class="nav-item dropdown">
                        <a class="nav-linkCus mainTxt me-3 text-decoration-none dropdownCus" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Ciao ,
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu bgCusDrop shadowCus">
                            @if (Auth::user()->is_admin)
                                <li><a class="dropdown-item dropdownCus mainTxt"
                                        href="{{ route('admin.dashboard') }}">Dashboard
                                        Admin</a>
                                </li>
                            @endif
                            @if (Auth::user()->is_revisor || Auth::user()->is_admin)
                                <li><a class="dropdown-item dropdownCus mainTxt"
                                        href="{{ route('revisor.dashboard') }}">Dashboard
                                        Revisore</a>
                                </li>
                            @endif
                            @if (Auth::user()->is_writer || Auth::user()->is_admin)
                                <li><a class="dropdown-item dropdownCus mainTxt"
                                        href="{{ route('writer.dashboard') }}">Dashboard
                                        Scrittore</a>
                                </li>
                            @endif
                            <li><a class="dropdown-item dropdownCus mainTxt" href="#"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                            </li>
                            <form action="{{ route('logout') }}" method="post" id="form-logout" class="d-none">@csrf</form>
                        </ul>
                    </li>
                    <li class="accentTxt accentBg mx-3">|</li>
                    @if (Auth::user()->is_writer)
                        <li><a class="dropdown-item dropdownCus mainTxt ms-2 me-2"
                                href="{{ route('article.create') }}">Inserisci un articolo</a></li>
                        <li class="accentTxt accentBg mx-3">|</li>
                    @endif
                    <li><a class="nav-linkCus mainTxt text-decoration-none dropdownCus ms-2"
                            href="{{ route('article.index') }}">Tutti gli articoli</a></li>
                </ul>
            @endauth

            @guest
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bars fs-1 mainTxt ms-5 navIcons"></i>
                            <i class="fa-solid fa-x mainTxt ms-5 navIcons d-none"></i>
                        </a>
                        <ul class="dropdown-menu bgCusDrop shadowCus">
                            <li><a class="dropdown-item dropdownCus mainTxt" href="{{ route('login') }}">Accedi</a>
                            </li>
                            <li><a class="dropdown-item dropdownCus mainTxt" href="{{ route('register') }}">Registrati</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            @endguest

        </div>

        <div class="d-flex justify-content-end">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </div>
    <form class="d-none" method="GET" action="{{ route('article.search') }}" id="search" role="search">
        <input class="form-control me-2" type="search" name="query" placeholder="Cerca" aria-label="Search">
        <button class="btn accentBg btnCus me-2">Cerca</button>
    </form>
    <i id="searchIcon" class="fa-solid fa-search srcIcon fs-2 mainTxt me-5 navIcons"></i>

</nav>
