@extends('layouts.App')

@section("titre")
Modifier utilisateur
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

                            @if (Auth::user()->role_id == 1)
                            <a href="{{URL::to('/espaceAdmin')}}" class="dropdown-item">Espace Admin</a>
                            @else
                            <a href="{{URL::to('/userReservations')}}" class="dropdown-item">Espace Utilisateur</a>
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

<div>

    <p class="text-center mb-5 fst-italic">Ajoutez une préstation</p>

   {!! Form::open(['url'=>'/modifierOption','method' => 'POST', 'class' => 'container col-md-3 mx-auto shadow-lg p-3 mb-5 bg-body rounded', 'files' => true]) !!}

               <div class="mb-3">
                    {{ Form::hidden('idUser', $uneOption->id) }}
                   {{ Form::label('', 'Nom', [ 'class' => 'form-label text-primary']) }}
                   {{ Form::text('nom',$uneOption->nom , [ 'class' => 'form-control ']) }}
               </div>
               <div class="mb-3">
                   {{ Form::label('', 'Prix', [ 'class' => 'form-label text-primary']) }}
                   <div class="input-group">
                       <span class="input-group-text">€</span>
                       {{ Form::text('prix',$uneOption->prix , [ 'class' => 'form-control ']) }}
                   </div>
               </div>
               <div class="mb-3">
                   {{ Form::label('', 'Durée', [ 'class' => 'form-label text-primary']) }}
                   {{ Form::text('duree',$uneOption->duree , [ 'class' => 'form-control ']) }}
               </div>
               <div class="mb-3">
                   {{ Form::label('', 'Description', [ 'class' => 'form-label text-primary']) }}
                   {{ Form::text('description',$uneOption->description , [ 'class' => 'form-control ']) }}
               </div>
               <div class="mb-3 ">
                   {{ Form::label('', 'Image', [ 'class' => 'form-label text-primary']) }}
                   {{ Form::file('image',[ 'type' => 'file' , 'class' => 'form-control'] ) }}
               </div>

           <div class="d-flex justify-content-center">
               {{ Form::submit('Modifier la prestation', ['class' => 'btn btn-primary btn-lg mt-5']) }}
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
