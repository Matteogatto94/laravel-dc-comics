<header>
    <section class="header_top bg-primary text-white">
        <div class="container">
            <div class="d-flex justify-content-end py-1">
                <p class="px-5">DC POWER&trade; VISA&reg;</p>
                <p>ADDITIONAL DC SITES</p>
            </div>
        </div>
    </section>
    <section class="header_bottom">
        <div class="container d-flex justify-content-around align-items-center py-4">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>

            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container">
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainMenu">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'guest.comics.index' ? 'active' : ''}}" href="{{route('guest.comics.index')}}">Comics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'comics.index' ? 'active' : ''}}" href="{{route('comics.index')}}">Admin Products</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="searchbar d-flex justify-content-end">
                <p>Search <i class="fa-solid fa-magnifying-glass"></i></p>
            </div>
        </div>

    </section>



</header>