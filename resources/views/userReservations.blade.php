@extends('layouts.App')

@section("titre")
Formulaire de réservation
 @endsection

@section("contenu")

<section class="d-flex flex-column  justify-content-between"
style="position: fixed;
top: 0;
left: 0;
bottom: 0;
right: 0;
overflow: auto;
">

<div>
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="{{URL::to('/')}}">LOGO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mt-5 mb-2 my-lg-0">
                        <a class="navbarElements mx-0 mx-lg-3 text-white text-decoration-none" aria-current="page" href="{{URL::to('/about')}}">À propos</a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item my-2 my-lg-0 ">
                                <a class="navbarElements mx-0 mx-lg-3 text-white text-decoration-none" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item my-2 my-lg-0">
                                <a class="navbarElements mx-0 mx-lg-3 text-white text-decoration-none" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="navbarElements dropdown-toggle text-white text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="{{URL::to('/userReservations')}}" class="dropdown-item">Espace Utilisateur</a>
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

        <div class="container">
                <p class="fs-1 my-5  ">Bienvenue  {{Auth::user()->name}} !</p>
                <p class="fs-3">Vue d'ensemble de vos réservations</p>
                @foreach ($listeUserReservation as $uneReservation)
                <div class="card mb-5 shadow-lg  mb-5 bg-body rounded">
                    <div class="card-header fs-5">
                      Réservation n°  <span class="bg-danger text-white rounded-5 py-1 px-3">{{$uneReservation->id}}</span>
                    </div>
                    <div class="card-body">
                      <p class="">Date de départ : {{$uneReservation->dateDepart}}</p>
                      <p>Heure de départ : {{$uneReservation->heureDepart}}</p>
                      <p >Point de départ : {{$uneReservation->pointDepart}}</p>
                      <a class="text-decoration-none " href=""><i class="fa-solid fa-phone btn btn-outline-primary btn-social mx-1  rounded-5  "></i></i> {{$uneReservation->numTel}}</a>
                      <div class="d-flex justify-content-center">
                            <a href="supprimerReservation/{{ $uneReservation->id }}" class="btn btn-danger mt-3 mt-lg-0">Annuler la réservation</a>
                      </div>
                    </div>
                  </div>
                @endforeach
        </div>
</div>



<footer class="footer text-center bg-danger py-3">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 ">
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 ">
                <a class="btn btn-outline-light btn-social mx-1  rounded-circle" href=""><i class="fa-solid fa-phone "></i></i></a>
                <a class="btn btn-outline-light btn-social mx-1 rounded-circle" href=""><i class="fa-brands fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-social mx-1 rounded-circle" href=""><i class="fa-brands fa-twitter"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
            </div>
        </div>
    </div>
</footer>
</section>

@endsection



