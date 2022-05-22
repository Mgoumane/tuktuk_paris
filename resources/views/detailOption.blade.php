@extends('layouts.App')

@section("titre")
{{$uneOption->nom}}
 @endsection

@section("contenu")
{{--  --}}
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand btn " href="{{URL::to('/')}}">LOGO</a>
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
<section class="container-fluid  " >

      {{-- Header --}}
    <h2 class="my-5 fs-1  mx-2 col-12 text-center col-lg-6 mx-lg-auto">Passez d’excellent moment avec nous !</h2>
    <div class="row mb-5" >

        <div class="col-md-4  "  >
            <div class=" mb-5 mx-5    " >
                <img src="../../public/Images/images_option/{{$uneOption->image}}" class="card-img-top py-2 py-2 rounded rounded-4" alt="..." height="100%" >
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h2>{{$uneOption->nom}}</h2>
                            <p class="fw-light ">{{$uneOption->duree}}</p>
                        </div>
                        <h2 class="text-danger">{{$uneOption->prix}} €</h2>
                    </div>
                    <p class="card-text lead fw-normal text-center">{{$uneOption->description}} <br><br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam cumque corporis, non eos sapiente, exercitationem</p>
                    <div class="d-flex justify-content-center">

                        <a href="/tuktuk_paris/public/formulaireReservation/{{$uneOption->id}}" class="btn btn-danger btn-lg ">Réserver</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8  ">
            <div class="row  " style=" height: 50%">
                <div class="col-md-6 border border-5 border-white "
                style="background: url(../../public/Images/images_option/{{$uneOption->image2}});
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;"
                ></div>

                <div class="col-md-6 border border-5 border-white"
                style="background: url(../../public/Images/images_option/{{$uneOption->image3}});
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;"
                ></div>

            </div>

            <div class="row  " style="height: 50%" >
                <div class="col-md-6 border border-5 border-white"
                style="background: url(../../public/Images/images_option/{{$uneOption->image4}});
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;"
                ></div>

                <div class="col-md-6 border border-5 border-white"
                style="background: url(../../public/Images/images_option/{{$uneOption->image5}});
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
    <img class="mb-5" src="../../public/Images/images_option/{{$uneOption->image2}}" alt="" style="width: 100%">
    <img class="mb-5" src="../../public/Images/images_option/{{$uneOption->image3}}" alt="" style="width: 100%">
    <img class="mb-5" src="../../public/Images/images_option/{{$uneOption->image4}}" alt="" style="width: 100%">
    <img class="mb-5" src="../../public/Images/images_option/{{$uneOption->image5}}" alt="" style="width: 100%">
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
