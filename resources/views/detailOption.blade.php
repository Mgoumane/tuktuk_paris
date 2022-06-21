@extends('layouts.App')

@section('titre')
    {{ $uneOption->nom }}
@endsection
@section('contenu')

{{-- {{dd($uneOption)}} --}}
    {{--  --}}
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{ URL::to('/') }}">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mt-5 mb-2 my-lg-0">
                        <a class="navbarElements mx-0 mx-lg-3 text-white text-decoration-none" aria-current="page"
                            href="{{ URL::to('/about') }}">À propos</a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item my-2 my-lg-0 ">
                                <a class="navbarElements mx-0 mx-lg-3 text-white text-decoration-none"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item my-2 my-lg-0">
                                <a class="navbarElements mx-0 mx-lg-3 text-white text-decoration-none"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="navbarElements dropdown-toggle text-white text-decoration-none"
                                href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="{{ URL::to('/userReservations') }}" class="dropdown-item">Espace Utilisateur</a>
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


    <section class="container-fluid  ">

        {{-- Header --}}
        <h2 class="my-5 fs-1  mx-2 col-12 text-center col-lg-6 mx-lg-auto">Passez d’excellents moments avec nous !</h2>
        <div class="row mb-5">

            <div class="col-md-4  ">
                <div class=" mb-5 mx-5    ">
                    <img src="../../public/Images/images_option/{{ $uneOption->image }}"
                        class="card-img-top py-2 py-2 rounded rounded-4" alt="..." height="100%">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h2>{{ $uneOption->nom }}</h2>
                                <p class="fw-light ">{{ $uneOption->duree }}</p>
                            </div>
                            <h2 class="text-danger">{{ $uneOption->prix }} €</h2>
                        </div>
                        <p class="fw-semibold ">Point de Passage:@foreach ($uneOption->ppOptions as $pp) <li>{{ $pp->nom }}</li> @endforeach </p>

                        <div class="d-flex justify-content-center d-lg-block">

                            <a href="/tuktuk_paris/public/formulaireReservation/{{ $uneOption->id }}"
                                class="btn btn-danger btn-lg ">Réserver</a>
                        </div>
                    </div>
                </div>
            </div>


            {{-- J'ai fait une fonction ternaire pour ne pas casser mon code Bootstrap  --}}
            <div class="col-md-8  ">
                <div class="row  " style=" height: 50%">
                    <div class="col-md-6 border border-5 border-white "
                    style="background: url(../../public/Images/images_option/{{isset($uneOption->ppOptions[0]->image) ? $uneOption->ppOptions[0]->image : "academie_francaise.jpg" }});
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: center;"
                    ></div>

                    <div class="col-md-6 border border-5 border-white"
                    style="background: url(../../public/Images/images_option/{{isset($uneOption->ppOptions[1]->image) ? $uneOption->ppOptions[1]->image : "montmartre.jpg" }});
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: center;"
                    ></div>

                </div>

                <div class="row  " style="height: 50%" >
                    <div class="col-md-6 border border-5 border-white"
                    style="background: url(../../public/Images/images_option/{{isset($uneOption->ppOptions[2]->image) ? $uneOption->ppOptions[2]->image : "paris.jpg" }});
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;"
                    ></div>

                    <div class="col-md-6 border border-5 border-white"
                    style="background: url(../../public/Images/images_option/{{isset($uneOption->ppOptions[3]->image) ? $uneOption->ppOptions[3]->image : "seine.jpg" }});
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;"
                    >
                    </div>
                </div>


            </div>
        </div>

        {{-- Images en mode inférieur à 768px --}}
        <div class="d-block d-md-none">
            @foreach ($uneOption->ppOptions as $pp)
                <img class="mb-5" src="../../public/Images/images_option/{{ $pp->image }}" alt=""
                                style="width: 100%">
            @endforeach

        </div>

    </section>

    <footer class="footer text-center bg-danger py-4 mt-5">
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
