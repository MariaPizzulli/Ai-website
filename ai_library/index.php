<?PHP
require_once('db_util.php');

session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">


<head>


  <meta charset="UTF-8">
  <meta name="author" content="templatemo">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


  <title>futuristic_ai_library - HTML CSS Template</title>


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">




  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <!--


  TemplateMo 577 Liberty Market


  https://templatemo.com/tm-577-liberty-market


  -->
</head>


<body>


<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
  <div class="preloader-inner">
    <span class="dot"></span>
    <div class="dots">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="index.php" class="logo">
            <img src="assets/images/logo/10.png" alt="" style="border-radius: 60%; max-width: 60px">
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="explore.php">Biblioteca AI</a></li>
            <li><a href="news.php">Riviste e news</a></li>
            <li><a href="about_us.php">Chi siamo</a></li>
            <?php
            if (isset ($_SESSION['logged'])) {
              echo '<li><a href="logout.php">logout </a></li>';
            } else {
              echo '<li><a href="signup.php">Iscriviti/Accedi</a></li>';
            }
            ?>
          </ul>
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->


<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="header-text">
          <h6>Futuristic AI Library</h6>
          <h2>Esplora il Futuro con Noi!</h2>
          <p>Benvenuti nella Futuristic AI Library, il luogo dove il futuro prende forma attraverso le parole. Esplora una vasta collezione di conoscenze sull'intelligenza artificiale e i suoi impatti sulla società. Dalle sfide alle opportunità, i nostri libri sono porte aperte verso un mondo di innovazione e scoperta. Entra e immergiti in pagine che delineano il cammino verso un domani avvincente.</p>
          <div class="buttons col-12">
            <div class="col-1">

            </div>
            <div class="main-button col-5">
              <a href="explore.php">Esplora la libreria</a>
            </div>

            <div class="main-button col-5" >
              <a href="news.php">Le nostre riviste e news</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <div class="owl-banner owl-carousel">
          <div class="item" style="width: 100%">
            <img src="assets/images/Home/test6.png" alt="">
          </div>
          <div class="item" style="width: 100%" >
            <img src="assets/images/Home/test12.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ***** Main Banner Area End ***** -->


<div class="categories-collections">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="categories">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h2>Naviga tra le nostre <em>categorie</em> qui.</h2>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="item">
                <div class="icon">
                  <img src="assets/images/logo/metaverso.png" alt="" style="border-radius: 50%">
                </div>
                <h4>Metaverso</h4>
                <div class="icon-button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="item">
                <div class="icon">
                  <img src="assets/images/logo/AI.png" alt="" style="border-radius: 50%">
                </div>
                <h4>AI</h4>
                <div class="icon-button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="item">
                <div class="icon">
                  <img src="assets/images/logo/nft.png" alt="" style="border-radius: 50%">
                </div>
                <h4>NFT</h4>
                <div class="icon-button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="item">
                <div class="icon">
                  <img src="assets/images/logo/security.png" alt="" style="border-radius: 50%">
                </div>
                <h4>Cybersecurity</h4>
                <div class="icon-button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="item">
                <div class="icon">
                  <img src="assets/images/logo/robot.png" alt="" style="border-radius: 50%">
                </div>
                <h4>Robot</h4>
                <div class="icon-button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="item">
                <div class="icon">
                  <img src="assets/images/logo/more.png" alt="" style="border-radius: 50%">
                </div>
                <h4>e molti altri...</h4>
                <div class="icon-button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>


<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p>Copyright © 2023 <a href="#">Futuristic AI Library</a>
          &nbsp;&nbsp;
          Realizzato da <a title="HTML CSS Templates " target="_blank">Maria Pizzulli e Maria Salas</a></p>
      </div>
    </div>
  </div>
</footer>




<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>


<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>


<script src="assets/js/tabs.js"></script>
<script src="assets/js/popup.js"></script>
<script src="assets/js/custom.js"></script>
<script>
  window.watsonAssistantChatOptions = {
    integrationID: "4d73569b-69e5-4d01-a714-65454f0ecda9", // The ID of this integration.
    region: "au-syd", // The region your integration is hosted in.
    serviceInstanceID: "c5d506db-0266-4276-92c3-e46dc3dc16e7", // The ID of your service instance.
    onLoad: function(instance) { instance.render(); }
  };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
    document.head.appendChild(t);
  });
</script>

</body>
</html>
