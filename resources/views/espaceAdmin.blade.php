@extends('layouts.App')

@section("titre")
Espace Admin
 @endsection

@section("contenu")
    <section
    class="d-flex flex-column  justify-content-between"
    style="position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    overflow: auto;
    ">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand text-white fs-1" href="{{URL::to('/')}}" style="font-family: 'Dancing Script', cursive;">TukTuk</a>
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
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}</a>
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
    {{-- /Navbar --}}
    @if (Session::has('message'))
            <div id="message" role="message" class="alert alert-success">
                {{ Session::get('message') }}
            </div>
    @endif

    @if (Session::has('message_delete'))
            <div id="message2" role="message2" class="alert alert-danger">
                {{ Session::get('message_delete') }}
            </div>
        @endif


        {{-- Contenu --}}
    <div class="container">
        <p class="fs-1 my-5  ">Espace Admin</p>
        <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
            <li class="nav-item " role="presentation">
                <a class="nav-link active text-black" id="reservation-tab" data-bs-toggle="tab" data-bs-target="#reservation-tab-pane" type="button" role="tab" aria-controls="reservation-tab-pane" aria-selected="true">Réservations</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-black" id="utilisateur-tab" data-bs-toggle="tab" data-bs-target="#utilisateur-tab-pane" type="button" role="tab" aria-controls="utilisateur-tab-pane" aria-selected="false">Utilisateurs</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-black" id="chauffeur-tab" data-bs-toggle="tab" data-bs-target="#chauffeur-tab-pane" type="button" role="tab" aria-controls="chauffeur-tab-pane" aria-selected="false">Chauffeurs</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-black" id="option-tab" data-bs-toggle="tab" data-bs-target="#option-tab-pane" type="button" role="tab" aria-controls="option-tab-pane" aria-selected="false">Options</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            {{-- Réservations --}}
            <div class="tab-pane fade show active" id="reservation-tab-pane" role="tabpanel" aria-labelledby="reservation-tab" tabindex="0">
                <p id="reservations" class="fs-3 my-5">Vue d'ensemble des réservations :</p>
                <table class="table d-none  d-md-table  ">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">Numéro de réservation  </th>
                            <th scope="col">Numéro de l'utilisateur  </th>
                            <th scope="col">Date de départ </th>
                            <th scope="col">Option choisie </th>
                            <th scope="col">Heure de départ </th>
                            <th scope="col">Numéro de téléphone</th>
                            <th scope="col">Point de départ</th>
                            <th scope="col">Date de réservation</th>
                            <th scope="col">Suppression</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allReservations as $uneReservation)
                        <tr>
                            <th scope="row">{{$uneReservation->id}}</th>
                            <th scope="row">{{$uneReservation->user_id}}</th>
                            <td>{{$uneReservation->dateDepart}}</td>
                            <td>{{$uneReservation->option_id}}</td>
                            <td>{{$uneReservation->heureDepart}}</td>
                            <td>{{$uneReservation->numTel}}</td>
                            <td>{{$uneReservation->pointDepart}}</td>
                            <td>{{$uneReservation->created_at}}</td>
                            <td class=""><a href="supprimerReservation/{{ $uneReservation->id }}" type="submit" class="text-danger fs-5 " ><i class="fa-solid fa-circle-minus "></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @foreach ($allReservations as $uneReservation)
                <div class="card mb-5 shadow-lg  mb-5 bg-body rounded d-md-none">
                    <div class="card-header fs-5">
                        Réservation n°  {{$uneReservation->id}} commandé par l'utilisateur n°{{$uneReservation->user_id}}
                    </div>
                    <div class="card-body">
                        <p>Option choisie: {{$uneReservation->option_id}} </p>
                        <p class="">Date de départ : {{$uneReservation->dateDepart}}</p>
                        <p>Heure de départ : {{$uneReservation->heureDepart}}</p>
                        <p >Point de départ : {{$uneReservation->pointDepart}}</p>
                        <a class="text-decoration-none " href=""><i class="fa-solid fa-phone btn btn-outline-primary btn-social mx-1  rounded-5  "></i></i> {{$uneReservation->numTel}}</a>
                        <div class="d-flex justify-content-center">
                            <a href="supprimerReservation/{{ $uneReservation->id }}" class="btn btn-outline-danger mt-3 mt-lg-0">Annuler la réservation</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Utilisateurs --}}
            <div class="tab-pane fade" id="utilisateur-tab-pane" role="tabpanel" aria-labelledby="utilisateur-tab" tabindex="0">
                <p id="utilisateurs" class="fs-3 my-5 ">Vue d'ensemble des utilisateurs :</p>
                <table class="table d-none  d-md-table  ">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">Numéro de l'utilisateur  </th>
                            <th scope="col">Nom </th>
                            <th scope="col">Email </th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Suppression</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allUsers as $unUser)
                        <tr>
                            <th scope="row">{{$unUser->id}}</th>
                            <td>{{$unUser->name}}</td>
                            <td>{{$unUser->email}}</td>
                            <td>{{$unUser->created_at}}</td>
                            <td class=""><a href="modifierUtilisateur/{{ $unUser->id }}" type="submit" class=" fs-5 " ><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td class=""><a href="supprimerUtilisateur/{{ $unUser->id }}" type="submit" class="text-danger fs-5 " ><i class="fa-solid fa-circle-minus "></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @foreach ($allUsers as $unUser)
                <div class="card mb-5 shadow-lg  mb-5 bg-body rounded d-md-none ">
                    <div class="card-header fs-5">
                        <p>Numéro de l'utilisateur :  <span class="bg-info text-white rounded-5 py-1 px-3">{{$unUser->id}}</span></p>
                    </div>
                    <div class="card-body">
                        <p class="">Nom : {{$unUser->name}}</p>
                        <p>Email : {{$unUser->email}}</p>
                        <p >Date de création : {{$unUser->created_at}}</p>
                        <div class="d-flex justify-content-around">
                            <a href="modifierUtilisateur/{{ $unUser->id }}" class="btn btn-outline-primary mt-3 mt-lg-0">Modifier l'utilisateur</a>
                            <a href="supprimerUtilisateur/{{ $unUser->id }}" class="btn btn-outline-danger mt-3 mt-lg-0">Supprimer l'utilisateur</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Chauffeurs --}}
            <div class="tab-pane fade" id="chauffeur-tab-pane" role="tabpanel" aria-labelledby="chauffeur-tab" tabindex="0">
                <p id="chauffeurs" class="fs-3 my-5">Vue d'ensemble des chauffeurs :</p>
                <div class="d-flex justify-content-center mb-5">
                    <a type="submit" href="ajouterChauffeur" class="btn btn-success btn-lg"><i class="fa-solid fa-plus mx-2"></i> Ajouter un chauffeur </a>
                </div>
                <table class="table d-none  d-md-table  ">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">Numéro du chauffeur  </th>
                            <th scope="col">Nom </th>
                            <th scope="col">Prénom </th>
                            <th scope="col">Adresse </th>
                            <th scope="col">Téléphone </th>
                            <th scope="col">Email </th>
                            <th scope="col">Date d'entrée</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Suppression</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($allChauffeurs as $unChauffeur)
                        <tr>
                            <th scope="row">{{$unChauffeur->id}}</th>
                            <td>{{$unChauffeur->nom}}</td>
                            <td>{{$unChauffeur->prenom}}</td>
                            <td>{{$unChauffeur->adresse}}</td>
                            <td>{{$unChauffeur->telephone}}</td>
                            <td>{{$unChauffeur->email}}</td>
                            <td>{{$unChauffeur->created_at}}</td>
                            <td ><a href="modifierChauffeur/{{ $unChauffeur->id }}" type="submit" class=" fs-5 " ><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="supprimerChauffeur/{{ $unChauffeur->id }}"   type="submit" class="text-danger fs-5 " ><i class="fa-solid fa-circle-minus "></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @foreach ($allChauffeurs as $unChauffeur)
                <div class="card mb-5 shadow-lg  mb-5 bg-body rounded d-md-none mt-5">
                    <div class="card-header fs-5">
                        <p>Numéro du chauffeur :  <span class="bg-info text-white rounded-5 py-1 px-3">{{$unChauffeur->id}}</span></p>
                    </div>
                    <div class="card-body">
                        <p class="">Nom : {{$unChauffeur->nom}}</p>
                        <p>Prenom : {{$unChauffeur->prenom}}</p>
                        <p >Adresse : {{$unChauffeur->adresse}}</p>
                        <p >Téléphone : {{$unChauffeur->telephone}}</p>
                        <p >Email : </p>
                        <p >Date d'entrée : {{$unChauffeur->created_at}}</p>
                    </div>
                    <div class="d-flex justify-content-around mb-3">
                        <a href="modifierChauffeur/{{ $unChauffeur->id }}" class="btn btn-outline-success mt-3 mt-lg-0">Modifier </a>
                        <a href="supprimerChauffeur/{{ $unChauffeur->id }}" class="btn btn-outline-danger mt-3 mt-lg-0">Supprimer </a>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Options --}}
            <div class="tab-pane fade" id="option-tab-pane" role="tabpanel" aria-labelledby="option-tab" tabindex="0">
                <p id="options" class="fs-3 my-5">Vue d'ensemble des options :</p>
                <div class="d-flex justify-content-center mb-5">
                    <a type="submit" href="ajouterOption" class="btn btn-success btn-lg"><i class="fa-solid fa-plus mx-2"></i> Ajouter une préstation </a>
                </div>
                <table class="table d-none  d-md-table  ">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">Numéro   </th>
                            <th scope="col">Nom </th>
                            <th scope="col">Prix </th>
                            <th scope="col">Durée </th>
                            <th scope="col">Description </th>
                            <th scope="col">Image </th>
                            <th scope="col">Modif.</th>
                            <th scope="col">Suppression</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($allOptions as $uneOption)
                        <tr>
                            <th scope="row">{{$uneOption->id}}</th>
                            <td>{{$uneOption->nom}}</td>
                            <td>{{$uneOption->prix}}</td>
                            <td>{{$uneOption->duree}}</td>
                            <td>{{$uneOption->description}}</td>
                            <td>{{$uneOption->image}}</td>
                            <td ><a href="modifierOption/{{ $uneOption->id }}" type="submit" class=" fs-5 " ><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td ><a href="supprimerOption/{{ $uneOption->id }}" type="submit" class="text-danger fs-5 " href=""><i class="fa-solid fa-circle-minus "></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @foreach ($allOptions as $uneOption)
                <div class="card mb-5 shadow-lg  mb-5 bg-body rounded d-md-none">
                    <div class="card-header fs-5">
                        <p>Numéro de l'option :  <span class="bg-info text-white rounded-5 py-1 px-3">{{$uneOption->id}}</span></p>
                    </div>
                    <div class="card-body">
                        <p class="">Nom : {{$uneOption->nom}}</p>
                        <p>Prix : {{$uneOption->prix}}</p>
                        <p >Duree : {{$uneOption->duree}}</p>
                        <p >Description : {{$uneOption->description}}</p>
                        <p >Image :{{$uneOption->image}} </p>
                    </div>
                    <div class="d-flex justify-content-around mb-3">
                        <a href="modifierOption/{{ $uneOption->id }}" class="btn btn-outline-success mt-3 mt-lg-0">Modifier la préstation</a>
                        <a href="supprimerOption/{{ $uneOption->id }}" class="btn btn-outline-danger mt-3 mt-lg-0">Supprimer la préstation</a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
    {{-- /Contenu --}}



    {{-- Footer --}}
    <footer class="footer text-center bg-danger py-3 mt-5">
                <div class="container">
                    <div class="row">
                        <!-- Footer Location-->
                        <div class="col-lg-4 ">
                        </div>
                        <!-- Footer Social Icons-->
                        <div class="col-lg-4 ">
                            <a type="submit" class="btn btn-outline-light btn-social mx-1  rounded-circle" href=""><i class="fa-solid fa-phone "></i></i></a>
                            <a type="submit" class="btn btn-outline-light btn-social mx-1 rounded-circle" href=""><i class="fa-brands fa-instagram"></i></a>
                            <a type="submit" class="btn btn-outline-light btn-social mx-1 rounded-circle" href=""><i class="fa-brands fa-twitter"></i></a>
                        </div>
                        <!-- Footer About Text-->
                        <div class="col-lg-4"></div>
                    </div>
                </div>
    </footer>
    {{-- /Footer --}}
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




