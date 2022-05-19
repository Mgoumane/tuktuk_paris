@extends('layouts.App')
@section("titre")
À propos

 @endsection

@section("contenu")


<section style="background-color: #2F4145">

    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-transparent ">
    <div class="container-fluid">
      <a class="navbar-brand text-danger" href="{{URL::to('/')}}">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex ">
            <li class="nav-item ">
                <a class="nav-link active text-white" aria-current="page" href="{{URL::to('/about')}}">À propos</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link active text-white" aria-current="page" href="#"> Se connecter </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link active text-white" aria-current="page" href="#"> Créer un compte </a>
            </li>
        </ul>
        </div>
    </div>
  </nav>
  {{-- Header --}}
  <div class="container-fluid  mt-lg-5  ">
      <h2 class="text-white text-center mb-5">Qui sommes nous ?</h2>
      <div class="row ">
          <div class="col-lg-4 mb-5 ">
            <h2 class=" fs-1   text-white  ">Passez d’excellent moment en famille, amis ou entre collègue en visitant la plus belle ville du monde à bord de nos nombreux Tuktuk !</h2>
            <p class="py-3 py-lg-5 text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur officia dolores atque veniam unde! Aliquid voluptate ipsam tempora laborum vero, commodi voluptatibus nesciunt reprehenderit exercitationem? Sint ea mollitia est modi! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil odit placeat non dolores debitis vel, sint nostrum maiores dignissimos impedit perferendis sed delectus necessitatibus provident porro tempore ab eum dolorum. </p>
            <div class="d-flex justify-content-center d-lg-inline-flex">
             <button type="button" class="btn btn-light btn-lg ">Réserver</button>
            </div>
          </div>
          <div class="col-lg-8 ">
            <img class="mb-5 text-center " src="../public/Images/images_about/invalides.jpg" height="100%" width="100%">
          </div>
      </div>
  </div>

  {{-- Montez avec nous --}}
  <div class="container-fluid bg-white py-5 ">
    <div class="row ">
        <div class="col-lg-4  "
        style="background: url(../public/Images/images_about/woman_selfie.jpg);
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;"
        >

        </div>
        <div class="col-lg-8 ">
           <div class="row">
            <h2 class=" text-center ">Passez d’excellent moment  en visitant la plus belle ville du monde à bord de nos nombreux Tuktuk !</h2>
            <p class=" my-5 text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur officia dolores atque veniam unde! Aliquid voluptate ipsam tempora laborum vero, commodi voluptatibus nesciunt reprehenderit exercitationem? Sint ea mollitia est modi! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil odit placeat non dolores debitis vel, sint nostrum maiores dignissimos impedit perferendis sed delectus necessitatibus provident porro tempore ab eum dolorum. </p>
           </div>
           <div class="row">
               <div class="col-md-6 my-3 my-md-0">
                <img class="mb-5 text-center " src="../public/Images/images_about/tuk2.jpeg" height="100%" width="100%">
               </div>
               <div class="col-md-6 my-3 my-md-0">
                <img class="mb-5 text-center " src="../public/Images/images_about/tuk3.jpeg" height="100%" width="100%">
               </div>
           </div>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <button type="button" class="btn btn-danger btn-lg ">Réserver</button>
        </div>
    </div>
  </div>
  {{-- Derniere Partie du site --}}
  <div class="container-fluid my-lg-5  ">
    <div class="row ">
        <div class="col-lg-8 "
        style="background: url(../public/Images/images_option/image3_option1.jpg);
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;"
        >

        </div>
        <div class="col-lg-4 mb-5 ">
            <h2 class="mt-5 fs-1   text-white  ">Passez d’excellent moment en famille, amis ou entre collègue en visitant la plus belle ville du monde à bord de nos nombreux Tuktuk !</h2>
            <p class="py-3 py-lg-5 text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur officia dolores atque veniam unde! Aliquid voluptate ipsam tempora laborum vero, commodi voluptatibus nesciunt reprehenderit exercitationem? Sint ea mollitia est modi! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil odit placeat non dolores debitis vel, sint nostrum maiores dignissimos impedit perferendis sed delectus necessitatibus provident porro tempore ab eum dolorum. </p>
            <div class="d-flex justify-content-center   ">
            <button type="button" class="btn btn-light btn-lg mx-auto">Réserver</button>
            </div>
          </div>
    </div>
</div>

{{-- Footer --}}
<footer class="footer text-center bg-transparent  py-4 mt-5">
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
