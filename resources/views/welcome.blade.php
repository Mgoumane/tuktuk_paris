<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- My CSS -->
    <link rel="stylesheet" href="../public/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

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
                <a class="nav-link active textWhite" aria-current="page" href="#"><p class="textWhite">Réserver</p></a>
              </li>
              <li class="nav-item mx-2 my-2">
                  <a class="nav-link active textWhite" aria-current="page" href="#"><p class="textWhite">À propos</p></a>
              </li>
              <li class="nav-item mx-2 my-2">
                  <a class="nav-link active " aria-current="page" href="#"> <p class="textWhite">Se connecter</p> </a>
              </li>
              <li class="nav-item mx-2 my-2 d-none d-lg-block">
                <button type="button" class="btn btn-danger ">Créer un compte</button>
              </li>
              <li class="nav-item mx-2 my-2 d-lg-none">
                <a class="nav-link active " aria-current="page" href="#"> <p class="textWhite">Créer un compte</p> </a>
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
            <div class="fixed-top d-none d-lg-block" style="position: absolute; top: 80px; left: 7%;">
              <img src="../public/Images/tuk2.jpeg" alt="" style="height: 80%; width: 50%">
            </div>
        </div>
        <span class="foo d-none d-lg-block span_vertical"></span>
    </section>



  </section>

















    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
