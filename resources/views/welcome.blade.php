@extends('layouts.App')

@section('titre')
    Accueil
@endsection

@section('contenu')
    <body>
        {{-- NAVBAR --}}
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <a class="navbar-brand fs-1" href="{{ URL::to('/') }}"
                    style="font-family: 'Dancing Script', cursive;">TukTuk</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mt-5 mb-2 my-lg-0">
                            <a class="navbarElements mx-0 mx-lg-3 text-black text-decoration-none" aria-current="page"
                                href="{{ URL::to('/about') }}">À propos</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                         <li class="nav-item my-2 my-lg-0 ">
                            <a class="navbarElements mx-0 mx-lg-3 text-black text-decoration-none"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item my-2 my-lg-0">
                                <a class="navbarElements mx-0 mx-lg-3 text-black text-decoration-none"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="navbarElements dropdown-toggle text-black text-decoration-none"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->role_id == 1)
                                    <a href="{{ URL::to('/espaceAdmin') }}" class="dropdown-item">Espace Admin</a>
                                @else
                                    <a href="{{ URL::to('/userReservations') }}" class="dropdown-item">Espace
                                            Utilisateur</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- SESSION DE CONFIRMATION --}}
        @if (Session::has('message'))
        <div id="message" role="message" class="alert alert-danger">
                {{ Session::get('message') }}
        </div>
        @endif

        {{-- HEADER --}}
        <header style="
                background: url(../public/Images/images_option/rue_cremieux.jpg) no-repeat center top;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                min-height: 450px;
	            width: 100%;">
            <div class="container py-5">
                <div class="row  d-flex justify-content-center py-5">
                    <div class="col-lg-8 col-lg-offset-2 mt d-flex flex-column  justify-content-between ">
                        <div class="d-flex justify-content-center">
                            <a href="#reservation" type="submit" class="btn btn-outline-light btn-lg m-5"
                                style="font-family: 'Dancing Script', cursive;">Réservez</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- CARDS PRESTATIONS-->
        <section class="container-fluid pt-lg-5" id="reservation">
            <div>
                <h2 class="mt-3 fs-1  mx-2 col-12 text-center col-lg-6 mx-lg-auto  fs-1"
                    style="font-family: 'Dancing Script', cursive;">Montez avec nous !</h2>
            </div>
            <div class="container">
                <div class="row justify-content-center my-5">
                    @foreach ($options as $option)
                    <div class=" mb-5 mx-2 mx-auto  " style="width: 22rem;">
                        <img src="../public/Images/images_option/{{ $option->image }}"
                                class="card-img-top py-2 py-2 rounded rounded-4" alt="..." height="250px">
                        <div class="card-body ">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3>{{ $option->nom }}</h3>
                                    <p class="fw-light ">{{ $option->duree }}</p>
                                </div>
                                <h3 class="text-danger">{{ $option->prix }} €</h3>
                            </div>
                            <p class="fw-semibold ">Description: </p>
                            <p class="card-text lead  ">{{ $option->description }} </p>
                            <div class="d-flex justify-content-around">
                                <a href="detailOption/{{ $option->id }}" class="btn btn-primary  btn-lg "
                                        style="font-family: 'Dancing Script', cursive;">En savoir +</a>
                                <a href="formulaireReservation/{{ $option->id }}" class="btn btn-danger btn-lg "
                                        style="font-family: 'Dancing Script', cursive;">Réserver</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- FOOTER-->
        <footer class="footer text-center bg-danger py-3">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 ">
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 ">
                        <a class="btn btn-outline-light btn-social mx-1  rounded-circle" href=""><i
                                class="fa-solid fa-phone "></i></i></a>
                        <a class="btn btn-outline-light btn-social mx-1 rounded-circle" href=""><i
                                class="fa-brands fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1 rounded-circle" href=""><i
                                class="fa-brands fa-twitter"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                    </div>
                </div>
            </div>
        </footer>
@endsection

<!-- JAVASCRIPT-->
<script>
        setTimeout(
            function() {
                document.querySelector("#message").classList.add("collapse");
            }, 3000
        );
</script>
