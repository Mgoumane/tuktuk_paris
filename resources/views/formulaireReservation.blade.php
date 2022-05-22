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
 {{-- <h1>Tu as choisis l'option numéro:  {{$uneOption->id}}</h1>
    <h1> {{Auth::user()->name;}}</h1> --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand text-danger" href="{{URL::to('/')}}">LOGO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex ">

                <li class="nav-item ">
                    <a class="nav-link active " aria-current="page" href="{{URL::to('/about')}}">À propos</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active " aria-current="page" href="#"> Se connecter </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active " aria-current="page" href="#"> Créer un compte </a>
                </li>

            </ul>

          </div>
        </div>
      </nav>

<div>
    {!! Form::open(['url'=>'/test','method' => 'POST', 'class' => 'col-md-3 mx-auto']) !!}
            <div class="mb-3">
                {{ Form::label('', 'Date de départ', [ 'class' => 'form-label']) }}
                {{ Form::date('dateDepart', '', [ 'class' => 'form-control ']) }}
                <div id="emailHelp" class="form-text">Veuillez nous renseigner la date de la course</div>
            </div>
            <div class="mb-3">
                {{ Form::label('', 'Heure de départ', [ 'class' => 'form-label']) }}
                {{ Form::time('heureDepart', '', [ 'class' => 'form-control ']) }}
                <div id="emailHelp" class="form-text">Veuillez nous renseigner l'heure de la course</div>
            </div>
            <div class="mb-3">
                {{ Form::label('', 'Numéro de téléphone', [ 'class' => 'form-label']) }}
                {{ Form::number('num', '', [ 'class' => 'form-control ']) }}
                <div id="emailHelp" class="form-text">Veuillez nous renseigner votre numéro</div>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                {{Form::select('pointDepart', ['Place de la concorde' => 'Place de la concorde', 'Tour Eiffel' => 'Tour Eiffel', 'Arc de triomphe' => 'Arc de triomphe', 'Montmartre' => 'Montmartre'], null, ['placeholder' => 'Sélectionner un point de départ']);}}
           </div>

            <div class="d-flex justify-content-center">
                {{ Form::submit('Réserver', ['class' => 'btn btn-outline-danger btn-lg']) }}
            </div>
    {!! Form::close() !!}
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
