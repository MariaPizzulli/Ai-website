<?PHP
require_once('db_util.php');

session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  header("location: index.php");
}

$sql = "SELECT * FROM Riviste";
$riviste = mysqli_query($connect, $sql) or die('Errore nella query: ' . $sql . '\n' . mysqli_error());
mysqli_close($connect);

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/MyCSS.css">
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
                        <li><a href="news.php" class="active">Riviste e news</a></li>
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


  <div class="discover-items-my " >
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h2>Scopri le migliori <em> Riviste</em></h2> <h2>e leggi le<em> News</em></h2>
          </div>
        </div>
        <div class="col-lg-7">
          <form id="search-form" name="gs" role="search" action="#">
            <div class="row">
              <div class="col-lg-4">
                <fieldset>
                  <input type="text" id="nomericerca" name="keyword" class="searchText" placeholder="Scrivi Qualcosa..." autocomplete="off" required>
                </fieldset>
              </div>
              <div class="col-lg-3">
                <fieldset>
                  <select name="Category" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                    <option selected>Tutte le Categorie</option>
                    <option type="checkbox" name="option1" value="AI">AI</option>
                    <option value="Robotica">Robotica</option>
                    <option value="Cyber Security">Cyber Security</option>
                    <option value="Metaverso">Metaverso</option>
                    <option value="NFT">NFT</option>
                    <option value="Machine Learning">Machine Learning</option>
                    <option value="Altri...">Altri...</option>
                  </select>
                </fieldset>
              </div>
              <div class="col-lg-2">
                <fieldset>
                  <button class="main-button" onclick="search_news(event)">Cerca</button>
                </fieldset>
              </div>
              <div class="col-lg-2">
                <fieldset>
                  <button class="main-button" onclick="reset_news(event)">Reset</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>

        <?php
        foreach ($riviste as $rivista)
        {
          echo '
          <div class="col-lg-3" name="cardnews">
          <span name="spancategory" style="display: none">'.$rivista['categoria'].'</span>
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/Explore/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src='.$rivista['immagine'].' alt="" style="border-radius: 20px;">
                <h4 class="twolines" name="titolorivista">'.$rivista['titolo'].'</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-12">
                    <span>Rivista: <strong>'.$rivista['rivista'].'</strong></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <span>Anno di Pubblicazione: <strong>'.$rivista['anno'].'</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href='.$rivista['link'].'>Sfoglia</a>
                </div>
              </div>
            </div>
          </div>
        </div>
          ';
        }
        ?>

      </div>
    </div>
  </div>

  <!-- fine prima parte -->

  <div class="item-details-page-my">
    <div class="container">
      <div class="row">

        <div class="col-lg-12">
          <div class="section-heading">
            <!--<div class="line-dec"></div>-->
            <h1>Rivista del <em>Mese</em></h1>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="left-image">
            <img src="assets/images/riviste/Copertina_ConsulenzaInnovazione.jpg" alt="" style="align-content: center; height: 700px; width: 500px">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h4><a href="https://tinnovamag.com/riviste/speciale-consulenza-innovazione-2023/">Intelligenza Artificiale e Imprese</a></h4>
          <span class="author">
            <img src="assets/images/riviste/teceinnlogo.png" alt="" style="max-width: 50px; border-radius: 50%;">
            <h6>Tecnologia e Innovazione<br><a href="https://www.facebook.com/tecnologiaeinnovazionemag/?locale=it_IT">@tecnologiainnovazione</a></h6>
          </span>
          <p>Tecnologia & Innovazione è la rivista che divulga le più importanti innovazioni tecnologiche nel contesto industriale e aziendale italiano. La rivista mappa dall’interno i principali processi di cambiamento dei settori trainanti Made in Italy: dall’automotive alla moda, dal food&beverage al settore dell’arredamento e dell’automazione.</p>
          <div class="row">
            <div class="col-3">
              <span class="bid">
                Mese<br><strong>Settembre</strong><br>
              </span>
            </div>
            <div class="col-4">
              <span class="owner">
                Anno<br><strong>2023</strong><br>
              </span>
            </div>
            <div class="col-5">
              <span class="ends">
                Categoria<br><strong>Tecnologia</strong><br>
              </span>
            </div>
          </div>
            <center>
            <form action="https://tinnovamag.com/riviste/speciale-consulenza-innovazione-2023/">
              <button type="submit" id="form-submit" class="main-button" >Sfoglia</button>
              <!--
              <button type="submit" id="form-submit" style="float: right" class="main-button">Controlla la Disponibilità</button>-->
            </form>
            </center>
        </div>



      </div>
    </div>
  </div>

  <!-- fine seconda parte -->

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
  <script>
    function search_news(event) {
      event.preventDefault() //disabilita altri comportamenti strani di default
      let input = document.getElementById('nomericerca').value //salvo in input il valore inserito nel filtro
      input=input.toLowerCase(); //rende il testo minuscolo
      let categoria = document.getElementById('chooseCategory').value //salvola categoria
      categoria=categoria.toLowerCase(); //rende il testo minuscolo
      let x = document.getElementsByName('cardnews'); //salvo in un array tutte le carte
      let titoli=document.getElementsByName('titolorivista'); //salvo in un array tutti titoli
      let categorie=document.getElementsByName('spancategory');  //salvo in un array tutte categorie

      for (i = 0; i < x.length; i++) {
        let titolo=titoli[i].innerHTML //metodo per prendere il valore del titolo iesimo
        let categoria_filtro=categorie[i].innerHTML //metodo per prendere il valore della categoria iesima
        if(categoria=='tutte le categorie'){  // se la categoria messa nel filtro vale ...
          console.log('tutte')
          if (!titolo.toLowerCase().includes(input)) {
            x[i].style.display="none";
          }
          else {
            x[i].style.display="list-item";
          }
        }else if(categoria_filtro.toLowerCase().includes(categoria)){

            console.log(categoria_filtro.toLowerCase()+' '+categoria)
            console.log(titolo.toLowerCase().includes(input) )
            if (!titolo.toLowerCase().includes(input)) {
              x[i].style.display="none";
            }
            else {
              x[i].style.display="list-item";
            }

        }else{x[i].style.display="none";}
      }
    }

    function reset_news(event) {
      event.preventDefault()

      let x = document.getElementsByName('cardnews');
      $('#chooseCategory').val('Tutte le Categorie');

      for (i = 0; i < x.length; i++) {

          x[i].style.display="list-item";

      }
    }
  </script>
  </body>
</html>