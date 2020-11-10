<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Sb Mídia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importação do Bootstrap via CDN (Não mexer / Importar stylesheet do bootstrap antes)-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontSizes.css">
</head>
<body class=" background">
    <!-- ☰☰☰ NAVBAR ☰☰☰ -->
    <div class="navbar bg-light fixed-top">
        <img src="assets/logo.png" alt="" id="logoHeader">
        <button class="navbar-toggler d-lg-none" style="background: none; border: 2px solid #212529;" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="images/navbar.png" alt="">
        </button>
        <ul class="list-group list-group-horizontal d-none d-lg-flex">
          <li class="navbarSpace d-flex align-content-around flex-wrap"><a href="#">SERVIÇOS</a></li>
          <br>
          <li class="navbarSpace d-flex align-content-around flex-wrap"><a href="#">DÚVIDAS</a></li>
          <br>
          <li class="navbarSpace d-flex align-content-around flex-wrap"><a href="#">PORTIFÓLIO</a></li>
          <br>
          <li class="d-flex align-content-around flex-wrap"><a href="#" class="btn-login">CONTATO</a></li>
        </ul>
    </div>
    <div class="collapse text-center sticky-top" id="navbarToggleExternalContent">
        <div class="bg-light p-3" style="font-size: 1.2rem;">
            <ul>
              <li><a href="#">#</a></li>
              <br>
              <li><a href="#">SERVIÇOS</a></li>
              <br>
              <li><a href="#">DÚVIDAS</a></li>
              <br>
              <li><a href="#">PORTIFÓLIO</a></li>
              <br>
              <br>
              <li><a href="#" class="btn-login">CONTATO</a></li>
            </ul>
        </div>
    </div>
    
    
    
    
    
    
    <!-- ☰☰☰ BANNER ☰☰☰ -->
    <div class="container-fluid banner shadow">
        <div class="row" style="min-height: 100vh; padding: 20vh 5vw 0 5vw; background: rgb(13,16,66);">
            <div class="col-12 col-md-6" style="padding: 0;">
                <img src="assets/logoWhite.png" alt="" id="logoBanner">
                <div style="color: #FFF; margin-top: 5%; font-weight: 700;">Soluções para web design e social media</div>
            </div>
            <div class="col-12 col-md-6" style="padding: 0;">
                <div style="color: #FFF; margin: 10% 0;">Fale conosco consulte preços e prazos:</div>
                <a class="btnContato" href="#">CONTATO</a>
            </div>
        </div>
    </div>
    

    
    <!-- ☰☰☰ CARDS ☰☰☰ -->
    <div class="container-fluid">
        
      <?php include 'cards.html' ?>

    </div>

    <!-- ☰☰☰ DÚVIDAS ☰☰☰ -->
    <div class="containe-fluid duvidas">

      <?php include 'duvidas.html' ?>

    </div>

    <!-- ☰☰☰ PORTIFÓLIO ☰☰☰ -->
    <div class="container-fluid">
      
      <?php include 'portifolio.html' ?>

    </div>

    <!-- ☰☰☰ DESTAQUES ☰☰☰ -->
    <div class="container-fluid">
      
      <?php include 'destaques.html' ?>

    </div>
    
    





    <!-- Importação do Bootstrap via CDN (Não mexer)-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>