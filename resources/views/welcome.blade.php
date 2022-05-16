<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- My CSS -->
    <link rel="stylesheet" href="../public/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Title -->
    <title>Acceuil</title>
  </head>

  <body class="red">

    <section class="container-fluid  " >

      <!-- Navbar -->
    <nav class=" navbar navbar-expand-lg navbar-light bg-transparent " style="position: absolute; width:100%">
      <div class="container-fluid">
        <a class="navbar-brand logo_rouge text-white " href="#"><p class="logo_rouge">LOGO</p> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid collapse navbar-collapse   " id="navbarSupportedContent">
         <div class="col-8"></div>
          <ul class="navbar-nav d-flex bg_red rounded">
              <li class="nav-item mx-2 my-2">
                <a class="nav-link active textWhite" aria-current="page" href="#reservation"><p class="textWhite fw-semibold">Réserver</p></a>
              </li>
              <li class="nav-item mx-2 my-2">
                  <a class="nav-link active textWhite" aria-current="page" href="#"><p class="textWhite fw-semibold">À propos</p></a>
              </li>
              <li class="nav-item mx-2 my-2">
                  <a class="nav-link active " aria-current="page" href="#"> <p class="textWhite fw-semibold">Se connecter</p> </a>
              </li>
              <li class="nav-item mx-2 my-2 d-none d-lg-block">
                <button type="button" class="btn btn-danger ">Créer un compte</button>
              </li>
              <li class="nav-item mx-2 my-2 d-lg-none">
                <a class="nav-link active " aria-current="page" href="#"> <p class="textWhite fw-semibold">Créer un compte</p> </a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

        <div class="row ">
            <div class="col-md-3 bg-danger d-none d-lg-block " style="height: 700px"></div>
            <div class="col-md-4  d-none d-md-block" ></div>
            <div class="col-lg-5  pt-lg-5 px-sm-5 big_box" >
                <h2 class="mt-5 fs-1  pt-5 ">Passez d’excellent moment en famille, amis ou entre collègue en visitant la plus belle ville du monde à bord de nos nombreux Tuktuk !</h2>
                <p class="py-3 py-lg-5">Lorem Ipsum is simply dummy text of t typesetting industry. Lorem IpsumLorem Ipsum is simply dummy text of t and typesettingindustry. </p>
                <button type="button" class="btn btn-danger">Réserver</button>
                <img src="../public/Images/tuk2.jpeg" alt="" style=" width: 100%" class="d-lg-none py-3">
            </div>
              <img src="../public/Images/tuk2.jpeg" alt="" style="height: 80%; width: 50%; position: absolute; top: 80px; left: 7%;" class="fixed-top d-none d-lg-block">
        </div>
        <span class="foo d-none d-lg-block span_vertical"></span>
    </section>

<section class="container-fluid" id="reservation">
  <div>
    <h2 class="mt-3 fs-1  text-center mx-2 ">Passez d’excellent moment en famille, amis ou entre collègue en visitant la plus belle ville du monde à bord de nos nombreux Tuktuk !</h2>
    <p class="py-3  text-center mx-2">Lorem Ipsum is simply dummy text of t typesetting industry. Lorem IpsumLorem Ipsum is simply dummy text of t and typesettingindustry. </p>
  </div>
<div class="container">
  <!-- Card Grid Items-->
  <div class="row justify-content-center mt-5">
    <div class=" col-md-6 col-lg-4 mb-5 mx-5" style="width: 20rem;">
        <img class="img-fluid rounded" src="../public/Images/touriste.jpg" class="card-img-top" alt="..." style="height: 200px; width:400px">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <h2>Petit tour</h2>
                    <p>30 minutes</p>
                </div>
                <h2 class="text-danger">59.99€</h2>
            </div>
            <p class="card-text lead  ">Tuktuk à Paris est une entreprise qui propose de découvrir la ville de Paris et ses monuments historiques.
            </p>
            <div class="d-flex justify-content-between">
                <a href="https://nbmagique.000webhostapp.com/" class="btn btn-primary  ">En savoir +</a>
                <a href="https://nbmagique.000webhostapp.com/" class="btn btn-danger  ">Réserver</a>
            </div>
        </div>
    </div>


        <div class=" col-md-6 col-lg-4 mb-5 mx-5" style="width: 20rem;">
            <img class="img-fluid rounded" src="../public/Images/moulin_rouge.jpg" class="card-img-top" alt="..." style="height: 200px; width:400px">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>Petit tour</h2>
                        <p>30 minutes</p>
                    </div>
                    <h2 class="text-danger">59.99€</h2>
                </div>
                <p class="card-text lead  ">Tuktuk à Paris est une entreprise qui propose de découvrir la ville de Paris et ses monuments historiques.
                </p>
                <div class="d-flex justify-content-between">
                    <a href="https://nbmagique.000webhostapp.com/" class="btn btn-primary  ">En savoir +</a>
                    <a href="https://nbmagique.000webhostapp.com/" class="btn btn-danger  ">Réserver</a>
                </div>
            </div>
        </div>


            <div class=" col-md-6 col-lg-4 mb-5 mx-5" style="width: 20rem;">
                <img class="img-fluid rounded" src="../public/Images/tuk4.jpeg" class="card-img-top" alt="..." style="height: 200px; width:400px">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h2>Petit tour</h2>
                            <p>30 minutes</p>
                        </div>
                        <h2 class="text-danger">59.99€</h2>
                    </div>
                    <p class="card-text lead  ">Tuktuk à Paris est une entreprise qui propose de découvrir la ville de Paris et ses monuments historiques.
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="https://nbmagique.000webhostapp.com/" class="btn btn-primary  ">En savoir +</a>
                        <a href="https://nbmagique.000webhostapp.com/" class="btn btn-danger  ">Réserver</a>
                    </div>
                </div>
            </div>
        </div>

</div>
</section>

<footer class="footer text-center bg-danger py-4">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 ">
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 ">
                <a class="btn btn-outline-light btn-social mx-1  rounded-circle" href="tel:+33668750207"><i class="fa-solid fa-phone "></i></i></a>
                <a class="btn btn-outline-light btn-social mx-1 rounded-circle" href="https://www.linkedin.com/in/mamoudou-goumane-6ba9811a7/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1 rounded-circle" href="https://github.com/Mgoumane"><i class="fa-brands fa-github"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
            </div>
        </div>
    </div>
</footer>

















    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html>
