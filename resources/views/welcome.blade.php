@extends('layouts.App')

@section("titre")
      Accueil
 @endsection

@section("contenu")

  <body class="red">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand text-danger" href="#">LOGO</a>
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


 <!-- Card Options-->
<section class="container-fluid pt-lg-5" id="reservation">
  <div>
    <h2 class="mt-3 fs-1  mx-2 col-12 text-center col-lg-6 mx-lg-auto">Passez d’excellent moment en famille, amis ou entre collègue avec nous !</h2>
    <p class="py-3  text-center mx-2">Lorem Ipsum is simply dummy text of t typesetting industry. Lorem IpsumLorem Ipsum is simply dummy text of t and typesettingindustry. </p>
  </div>
<div class="container">
  <div class="row justify-content-center my-5">
@foreach ( $options as $option )
    <div class=" mb-5 mx-2 mx-auto   " style="width: 22rem;">
        <img src="../public/Images/images_option/{{$option->image}}" class="card-img-top py-2 py-2 rounded rounded-4" alt="..." height="250px" >
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <h2>{{$option->nom}}</h2>
                    <p class="fw-light ">{{$option->duree}}</p>
                </div>
                <h2 class="text-danger">{{$option->prix}} €</h2>
            </div>
            <p class="card-text lead fw-normal text-center">{{$option->description}} <br><br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam cumque corporis, non eos sapiente, exercitationem</p>
            <div class="d-flex justify-content-around">
                <a href="detailOption/{{ $option->id }}" class="btn btn-primary  btn-lg">En savoir +</a>
                <a href="{{URL::to('/formulaireReservation')}}" class="btn btn-danger btn-lg ">Réserver</a>
            </div>
        </div>
    </div>
@endforeach
    </div>
</div>
</section>

 <!-- Footer-->
<footer class="footer text-center bg-danger py-4">
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

@endsection


