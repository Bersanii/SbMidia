<!DOCTYPE html>
<html lang="pt-BR" style="scroll-behavior: smooth;">
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
          <li class="navbarSpace d-flex align-content-around flex-wrap" style="margin-right: 15px"><a href="#servicos">SERVIÇOS</a></li>
          <br>
          <li class="navbarSpace d-flex align-content-around flex-wrap" style="margin-right: 15px"><a href="#duvidas">DÚVIDAS</a></li>
          <br>
          <li class="navbarSpace d-flex align-content-around flex-wrap" style="margin-right: 35px"><a href="#portifolio">PORTIFÓLIO</a></li>
          <br>
          <li class="d-flex align-content-around flex-wrap" style="margin-right: 15px"><a href="" class="btn-login" data-toggle="modal" data-target="#staticBackdrop">CONTATO</a></li>
        </ul>
    </div>
    <div class="collapse text-center sticky-top" id="navbarToggleExternalContent">
        <div class="bg-light p-3" style="font-size: 1.2rem;">
            <ul>
              <li><a href="#">#</a></li>
              <br>
              <li><a href="#servicos">SERVIÇOS</a></li>
              <br>
              <li><a href="#duvidas">DÚVIDAS</a></li>
              <br>
              <li><a href="#portifolio">PORTIFÓLIO</a></li>
              <br>
              <br>
              <li><a href="" class="btn-login" data-toggle="modal" data-target="#staticBackdrop">CONTATO</a></li>
            </ul>
        </div>
    </div>
    
    
    
    
    
    
    <!-- ☰☰☰ BANNER MOBILE ☰☰☰ -->
    <div class="container-fluid banner shadow">

      <?php include 'banner.html' ?>

    </div>

    
    

    
    <!-- ☰☰☰ CARDS ☰☰☰ -->
    <div class="container-fluid paddingSection  marginSections" id="servicos">
        
      <?php include 'cards.html' ?>

    </div>

    <!-- ☰☰☰ DESTAQUES ☰☰☰ -->
    <div class="container-fluid paddingSection marginSections">
      
      <?php include 'destaques.html' ?>

    </div>

    <!-- ☰☰☰ DÚVIDAS ☰☰☰ -->
    <div class="containe-fluid  paddingSection marginSections" id="duvidas">

      <?php include 'duvidas.html' ?>

    </div>

    <!-- ☰☰☰ PORTIFÓLIO ☰☰☰ -->
    <div class="container-fluid paddingSection marginSections" id="portifolio">
      
      <?php include 'portifolio.html' ?>

    </div>

    <!-- ☰☰☰ FOOTER ☰☰☰ -->
    <div class="container-fluid">
      <div class="row" style="background-color: #121430; border-top: #ff4747 4px solid; padding: 2vh 5vw 2vh 5vw">
        <div class="col-12 col-sm-6 d-flex justify-content-center" style="margin-bottom: 15px">
          <img src="assets/logoWhite.png" alt="" style="width: 50%; height: auto">
        </div>
        <div class="col-12 col-sm-6 card-text d-flex justify-content-sm-center" style="color: #FFF">
          <div>
            Entre em contato: 
            <br/>
            <strong> contato@sbmidia.com</strong>
          </div>
        </div>
      </div>
    </div>
    


    <!-- ☰☰☰ BOTÕES ☰☰☰ -->
    
    <div class="botaowhats">
      <a href="https://api.whatsapp.com/send?phone=5519981219245&text=Ol%C3%A1%20vim%20pelo%20website" target="_blank">
        <!-- <i style="margin-top:16px" class="fa fa-whatsapp"></i> -->
        <img src="assets/Whats.png" alt="" style="position:fixed; width:60px; height:60px; bottom: 20px; right: 20px">
      </a>
      <a href="https://www.instagram.com/cap.sbmidia/" target="_blank">
        <!-- <i style="margin-top:16px" class="fa fa-instagram"></i> -->
        <img src="assets/Insta.png" alt="" style="position:fixed; width:60px; height:60px; bottom: 100px; right: 20px">
      </a>  
    </div>


    <!-- ☰☰☰ MODAL ☰☰☰ -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="border-bottom: 1px solid  #ff4747">
            <h5 class="modal-title tituloSec" id="staticBackdropLabel" style="margin:0">CONTATO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="border-bottom: 1px solid  #ff4747">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btnFormCancelar" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btnFormEnviar">ENVIAR</button>
          </div>
        </div>
      </div>
    </div>



    <!-- Importação do Bootstrap via CDN (Não mexer)-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>