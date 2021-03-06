@extends('layouts.App')

@section("titre")
Espace utilisateur
 @endsection

@section("contenu")
<body>
    <section class="d-flex flex-column  justify-content-between" style="position: fixed; top: 0;left: 0;bottom: 0;right: 0;overflow: auto;">
        {{-- NAVBAR --}}
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
        @if (Session::has('message'))
        <div id="message" role="message" class="alert alert-success d-flex justify-content-center">
            {{ Session::get('message') }}
        </div>
        @endif
        {{-- :NAVBAR --}}

        {{-- CONTENU --}}
        <div class="container">
            <p class="fs-1 my-5  ">Bienvenue  {{Auth::user()->name}} !</p>
            <table class="table d-none  d-md-table  ">
                <thead class="table-info">
                    <tr>
                        <th scope="col">Numéro de l'utilisateur  </th>
                        <th scope="col">Nom </th>
                        <th scope="col">Email </th>
                        <th scope="col">Modifier le mot de passe</th>
                        <th scope="col">Date de création</th>
                        <th scope="col">Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{Auth::user()->id}}</th>
                        <td>{{Auth::user()->name}}</td>
                        <td>{{Auth::user()->email}}</td>
                        <td><a href="" type="submit" class=" fs-5 " ><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td>{{Auth::user()->created_at}}</td>
                        <td class=""><a href="userModif/{{Auth::user()->id}}" type="submit" class=" fs-5 " ><i class="fa-solid fa-pen-to-square"></i></a></td>
                    </tr>
                </tbody>
            </table>
            <div class="card mb-5 shadow-lg  mb-5 bg-body rounded d-md-none ">
                <div class="card-header fs-5">
                    <p>Votre Profil :</p>
                </div>
                <div class="card-body">
                    <p class="">Nom : {{Auth::user()->name}}</p>
                    <p>Email : {{Auth::user()->email}}</p>
                    <p >Date de création : {{Auth::user()->created_at}}</p>
                    <div class="d-flex justify-content-around">
                        <a href="modifierUtilisateur/{{Auth::user()->id}}" class="btn btn-outline-primary mt-3 mt-lg-0">Modifier </a>
                        <a href="supprimerUtilisateur/{{Auth::user()->id}}" class="btn btn-outline-danger mt-3 mt-lg-0">Supprimer </a>
                    </div>
                </div>
            </div>

            <p class="fs-3 mt-5">Vue d'ensemble de vos réservations :</p>
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
        {{-- /CONTENU --}}

        {{-- FOOTER --}}
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
        {{-- /FOOTER --}}
    </section>
    <script>
        setTimeout(
            function() {
                document.querySelector("#message").classList.add("collapse");
            }, 3000
        );
        setTimeout(
            function() {
                document.querySelector("#message2").classList.add("collapse");
            }, 3000
        );
    </script>
@endsection



