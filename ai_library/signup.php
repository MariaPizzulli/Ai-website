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

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Liberty Template - Create NFT Page</title>

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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="explore.php">Biblioteca AI</a></li>
                        <li><a href="news.php">Riviste e news</a></li>
                        <li><a href="about_us.php">Chi siamo</a></li>

                      <?php
                      if (isset ($_SESSION['logged'])) {
                        echo '<li><a href="logout.php" class="active">logout </a></li>';
                      } else {
                        echo '<li><a href="signup.php" class="active">Iscriviti/Accedi</a></li>';
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

  <div class="item-details-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <!--
            <div class="line-dec"></div>
            -->
            <h1>CREA IL TUO<em> ACCOUNT </em> O <em>ACCEDI</em></h1><br>
            <a href="login.php"><h5>Se possiedi un account esegui l'accesso</h5></a>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="contact" action="signup-check.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <?php if (isset($_GET['success'])) { ?>
              <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            <div class="row">
              <div class="col-lg-4">
                <fieldset>
                  <label for="title">Nome</label>
                  <input type="title" name="name" id="title" placeholder="Es. Liam" autocomplete="off" required>
                </fieldset>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <label for="description">Cognome</label>
                  <input type="description" name="surname" id="description" placeholder="Es. Smith" autocomplete="off" required>
                </fieldset>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <label for="username">Username</label>
                  <input type="username" name="username" id="username" placeholder="Es. Liam_75" autocomplete="off" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="price">Email</label>
                  <input type="price" name="email" id="price" placeholder="Es. liamsmith@gmail.com" autocomplete="off" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="royalities">Password</label>
                  <input type="royalities" name="password" id="royalities" placeholder="********" autocomplete="off" required>
                </fieldset>
              </div>
               <div class="col-lg-4">

               </div>
              <div class=" col-lg-4">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button"  >REGISTRATI</button>
                </fieldset>
              </div>
            </div>
          </form>
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