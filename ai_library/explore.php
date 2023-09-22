<?PHP
require_once('db_util.php');

session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  header("location: index.php");
}

$sql = "SELECT * FROM Libri";
$libri = mysqli_query($connect, $sql) or die('Errore nella query: ' . $sql . '\n' . mysqli_error());
mysqli_close($connect);

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Liberty NFT Marketplace - Explore Listing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/MyCSS.css">
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
                        <li><a href="explore.php" class="active">Biblioteca AI</a></li>
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

  <div class="page-heading-second-version">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Futuristic AI Library</h3>
          <h2>Scopri i nostri libri</h2>
          <span>Home > <a href="#">Biblioteca AI</a></span>
        </div>
      </div>
    </div>
    <div class="featured-explore">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-features owl-carousel">
              <div class="item">
                <div class="thumb">
                  <img src="assets/images/Explore/Life 3.0.jpg" alt="" style="border-radius: 20px; width: 80%">
                  <div class="hover-effect">
                    <div class="content">
                      <h4><a href="https://www.goodreads.com/book/show/34272565-life-3-0?ref=nav_sb_ss_1_8">Life 3.0</a></h4>
                      <span class="author">
                        <img src="assets/images/Explore/MaxTegmark.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6>Max Tegmark<br><a href="https://it.wikipedia.org/wiki/Max_Tegmark">Wikipedia</a></h6>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="assets/images/Explore/HumanCompatible.jpg" alt="" style="border-radius: 20px; width: 80%">
                  <div class="hover-effect">
                    <div class="content">
                      <h4><a href="https://www.goodreads.com/book/show/44767248-human-compatible?ref=nav_sb_ss_2_9">Compatible</a></h4>
                      <span class="author">
                        <img src="assets/images/Explore/Stuart J. Russell.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6>Stuart J. Russell<br><a href="https://en.wikipedia.org/wiki/Stuart_J._Russell">Wikipedia</a></h6>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="assets/images/Explore/brains.jpg" alt="" style="border-radius: 20px; width: 80%">
                  <div class="hover-effect">
                    <div class="content">
                      <h4><a href="https://www.goodreads.com/book/show/54503521-a-thousand-brains?ref=nav_sb_ss_1_15">Thousand Brains</a></h4>
                      <span class="author">
                        <img src="assets/images/Explore/Hawkins.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6>Jeff Hawkins<br><a href="https://en.wikipedia.org/wiki/Jeff_Hawkins">Wikipedia</a></h6>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="assets/images/Explore/ML.jfif" alt="" style="border-radius: 20px; width: 80%">
                  <div class="hover-effect">
                    <div class="content">
                      <h4><a href="https://leanpub.com/machine-learning-q-and-ai/">Learning Q and AI</a></h4>
                      <span class="author">
                        <img src="assets/images/Explore/SebastianRaschka2.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6>Sebastian Raschka<br><a href="https://www.wikidata.org/wiki/Q57159429">Wikipedia</a></h6>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="discover-items ">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Scopri le nostre <em>Categorie</em></h2>
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
        foreach ($libri as $libro)
        {
          echo '
            <div class="col-lg-3" name="cardnews">
            <span name="spancategory" style="display: none">'.$libro['categoria'].'</span>
          <div class="item ">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/Explore/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src='.$libro['immagine'].' alt="" style="border-radius: 20px;">
                <h4 class="twolines" name="titololibro">'.$libro['titolo'].'</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-12">
                    <span>Autore: <strong>'.$libro['autore'].'</strong></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <span>Anno di Pubblicazione: <strong>'.$libro['anno'].'</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href='.$libro['link'].'>Dettagli</a>
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

  <div class="top-seller">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>I migliori autori di questo mese</h2>
          </div>
        </div>

        <div class="offset-1 col-lg-3 col-sm-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h4>1.</h4>
                <img src="assets/images/autori/stuartjrussel.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Stuart J. Russell<br><a href="https://en.wikipedia.org/wiki/Stuart_J._Russell">Informatico</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>2.</h4>
                <img src="assets/images/autori/nickbostrom.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Nick Bostrom<br><a href="https://it.wikipedia.org/wiki/Nick_Bostrom">Filosofo</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>3.</h4>
                <img src="assets/images/autori/garyfredmarcus.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Gary Fred Marcus<br><a href="https://en.wikipedia.org/wiki/Gary_Marcus">Scienziato cognitivo</a></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="offset-1 col-lg-3 col-sm-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h4>4.</h4>
                <img src="assets/images/autori/turing.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Alan Turing<br><a href="https://it.wikipedia.org/wiki/Alan_Turing">Matematico</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>5.</h4>
                <img src="assets/images/autori/francescarossi.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Francesca Rossi<br><a href="https://it.wikipedia.org/wiki/Francesca_Rossi_(scienziata)">Informatica</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>6.</h4>
                <img src="assets/images/autori/katedarling.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Kate Darling<br><a href="https://en.wikipedia.org/wiki/Kate_Darling">Ricercatrice</a></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="offset-1 col-lg-3 col-sm-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h4>7.</h4>
                <img src="assets/images/autori/maxtegmark.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Max Tegmark<br><a href="https://it.wikipedia.org/wiki/Max_Tegmark">Cosmologo</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>8.</h4>
                <img src="assets/images/autori/katecrawford.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Kate Crawford<br><a href="https://en.wikipedia.org/wiki/Kate_Crawford">Accademica</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>9.</h4>
                <img src="assets/images/autori/amywebb.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Amy Webb<br><a href="https://en.wikipedia.org/wiki/Amy_Webb">Futurista</a></h6>
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
  <script>
      function search_news(event) {
          event.preventDefault()
          console.log('Imposto i filtri')
          let input = document.getElementById('nomericerca').value
          input=input.toLowerCase();
          let categoria = document.getElementById('chooseCategory').value
          categoria=categoria.toLowerCase();
          let x = document.getElementsByName('cardnews');
          let titoli=document.getElementsByName('titololibro');
          let categorie=document.getElementsByName('spancategory');
          console.log(x.length)
          for (i = 0; i < x.length; i++) {
              let titolo=titoli[i].innerHTML
              let categoria_filtro=categorie[i].innerHTML
              console.log(categoria)
              if(categoria=='tutte le categorie'){
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
          console.log('Ripristino filtri')
          let x = document.getElementsByName('cardnews');
          $('#chooseCategory').val('Tutte le Categorie');

          for (i = 0; i < x.length; i++) {

              x[i].style.display="list-item";

          }
      }
  </script>

  </body>
</html>