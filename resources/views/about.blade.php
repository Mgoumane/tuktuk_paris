@extends('layouts.App')
@section("titre")
À propos

 @endsection

@section("contenu")


<section style="background-color: #2F4145">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand text-danger" href="{{URL::to('/')}}">LOGO</a>
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
  {{-- Header --}}
  <div class="container-fluid  mt-lg-5  ">

      <div class="row ">
          <div class="col-lg-4 mb-5 ">
            <h2 class=" fs-1   text-white  fw-light mt-3 mt-md-0 ">Passez d’excellent moment en famille, amis ou entre collègue en visitant la plus belle ville du monde à bord de nos nombreux Tuktuk !</h2>
            <p class="py-3 py-lg-5 text-white fs-5">Les monuments parisiens, par leur histoire et leur impressionnante architecture font incontestablement partie du charme de la capitale française. La Tour-Eiffel, Notre-Dame de Paris, le Sacré-Cœur et l’Arc de Triomphe sont les plus réputés.  </p>
            <div class="d-flex justify-content-center d-lg-inline-flex">
                <a href="{{URL::to('/')}}" class="btn btn-danger btn-lg">Réserver</a>
            </div>
          </div>
          <div class="col-lg-8 ">
            <img class="mb-5 text-center " src="../public/Images/images_about/invalides.jpg" height="100%" width="100%">
          </div>
      </div>
  </div>

  {{-- Section 2 --}}
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
            <h2 class=" text-center text-danger fw-light">Le TUKTUK</h2>
            <p class=" my-5 px-lg-5  fs-5">Le tuktuk est un tricycle à moteur originaire de Thaïlande qui existe en différentes versions. Le tuktuk 6 places permet de transporter jusqu’à 6 passagers assis à l’arrière du véhicule sur de larges banquettes installées l’une en face de l’autre. </p>
           </div>
           <div class="row">k
               <div class="col-md-6 my-3 my-md-0">
                <img class="mb-5 text-center " src="../public/Images/images_about/tuk2.jpeg" height="100%" width="100%">
               </div>
               <div class="col-md-6 my-3 my-md-0">
                <img class="mb-5 text-center " src="../public/Images/images_about/tuk3.jpeg" height="100%" width="100%">
               </div>
           </div>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <a href="{{URL::to('/')}}" class="btn btn-danger btn-lg">Réserver</a>
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
        <div class="col-lg-4 mb-5 px-lg-5 ">
            <h2 class="mt-5 fs-1   text-white  ">Des monuments historiques</h2>
            <p class="py-3 py-lg-5 text-white">Les monuments de Paris font tout simplement partie des plus visités au monde ce qui n'est pas surprenant sachant que Paris est elle-même la ville la plus prisée des touristes français et étrangers.Surnommée la ville Lumière ou celle des amoureux, elle attire en effet des millions de visiteurs chaque année. Chacun venant chercher un peu de charme à la française. </p>
            <div class="d-flex justify-content-center   ">
                <a href="{{URL::to('/')}}" class="btn btn-danger btn-lg">Réserver</a>
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
