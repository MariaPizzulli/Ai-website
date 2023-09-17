<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/MyCSS.css">
    <link rel="stylesheet" href="../assets/css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
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
                    <a href="../index.php" class="logo">
                        <img src="../assets/images/logo/10.png" alt="" style="border-radius: 60%; max-width: 60px">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="explore.php">Biblioteca AI</a></li>
                        <li><a href="news.php" class="active">Riviste e news</a></li>
                        <li><a href="about_us.php">Chi siamo</a></li>
                        <li><a href="signup.php">Iscriviti/Accedi</a></li>
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
<!--
  <div class="page-heading normal-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Futuristic AI Library</h6>
          <h2>View News</h2>
          <span>Home > <a href="#">News</a></span>
          <div class="buttons">
            <div class="main-button">
              <a href="explore.php">Latest News</a>
            </div>
            <div class="border-button">
              <a href="login signup.php">News By Categories</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
-->

  <div class="discover-items-my " >
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <!--
            <div class="line-dec"></div>-->
            <h2>Scopri le migliori <em> Riviste</em></h2> <h2>e leggi le<em> News</em></h2>
          </div>
        </div>
        <div class="col-lg-7">
          <form id="search-form" name="gs" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-4">
                <fieldset>
                  <input type="text" name="keyword" class="searchText" placeholder="Scrivi Qualcosa..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-3">
                <fieldset>
                  <select name="Category" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                    <option selected>Tutte le Categorie</option>
                    <option type="checkbox" name="option1" value="AI">AI</option>
                    <option value="Robot">Robot</option>
                    <option value="Cyber Security">Cyber Security</option>
                    <option value="Metaverso">Metaverso</option>
                    <option value="NFT">NFT</option>
                    <option value="Machine Learning">Machine Learning</option>
                    <option value="Altri...">Altri...</option>
                  </select>
                </fieldset>
              </div>
              <!--
              <div class="col-lg-3">
                <fieldset>
                  <select name="Price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                    <option selected>Disponibile</option>
                    <option selected>Ultimi arrivi</option>
                    <option value="Coming-Soon">Prossimamente</option>
                  </select>
                </fieldset>
              </div>-->
              <div class="col-lg-2">
                <fieldset>
                  <button class="main-button">Cerca</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <!--
        <div class="col-lg-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="banner">Double Item</span>
              </div>
              <div class="col-lg-6 col-sm-6">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="assets/images/discover-01.jpg" alt="" style="border-radius: 20px;">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class="col-lg-6 col-sm-6">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="assets/images/discover-02.jpg" alt="" style="border-radius: 20px;">
                <h4>His Other Half</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <span>Current Bid: <br> <strong>8.16 ETH</strong></span>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <span>Category: <br> <strong>Digital Art</strong></span>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <span>Collection:: <br> <strong>2/2</strong></span>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="news.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <div class="col-lg-3">
          <div class="item ">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/Explore/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="../assets/images/riviste/wireditalia.png" alt="" style="border-radius: 20px;">
                <h4 class="twolines">L'era dei Superumani </h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-12">
                    <span>Rivista: <strong>Wired Italia</strong></span>
                  </div>

                </div>

                <div class="row">

                  <div class="col-12">
                    <span>Anno di Pubblicazione: <strong>2022</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="https://www.wired.it/article/wired-in-edicola-primavera-super-umani/">Sfoglia</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/Explore/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="../assets/images/riviste/cryptomagazine.png" alt="" style="border-radius: 20px;">
                <h4 class="twolines">The First step to Financial freedom</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-12">
                    <span>Rivista: <strong>Crypto Magazine</strong></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <span>Anno di Pubblicazione: <strong>2019</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="https://cryptomagazine.shop/products/crypto-magazine-issue-1">Sfoglia</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/Explore/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="../assets/images/riviste/cybersecuritytrends.png" alt="" style="border-radius: 20px;">
                <h4 class="twolines">Cybersecurity e Geopolitica</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-12">
                    <span>Rivista: <strong>Cybersecurity Trends</strong></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <span>Anno di Pubblicazione: <strong>2021</strong></span>
                  </div>
                </div>

              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="https://www.cybertrends.it/sfoglia-la-rivista/">Sfoglia</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/Explore/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="../assets/images/riviste/focus.png" alt="" style="border-radius: 20px;">
                <h4 class="twolines">Top Tech</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-12">
                    <span>Rivista: <strong>Focus Italia</strong></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <span>Anno di Pubblicazione: <strong>2019</strong></span>
                  </div>
                </div>

              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="https://www.focus.it/mondo-focus/focus-e-speciali/focus/361">Sfoglia</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/Explore/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="../assets/images/riviste/firmware.png" alt="" style="border-radius: 20px;">
                <h4 class="twolines">IoT (Internet of Things)</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-12">
                    <span>Rivista: <strong>Firmware 2.0</strong></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <span>Anno di Pubblicazione: <strong>2019</strong></span>
                  </div>
                </div>

              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="https://it.emcelettronica.com/scarica-gratis-firmware-2-0-00?ref=menu">Sfoglia</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/Explore/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="../assets/images/riviste/ilvenerdi.png" alt="" style="border-radius: 20px">
                <h4 class="twolines">Questa copertina l'ho fatta io</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-12">
                    <span>Rivista: <strong>Il Venerdì</strong></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <span>Anno di Pubblicazione: <strong>2023</strong></span>
                  </div>
                </div>

              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="https://www.repubblica.it/venerdi/2023/04/21/news/intelligenza_artificiale_midjourney_chatgpt_copertina_venerdi-397066872/news.php">Sfoglia</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/Explore/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="../assets/images/riviste/lescienzemind.png" alt="" style="border-radius: 20px;">
                <h4 class="twolines">Il Futuro nel Metaverso</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-12">
                    <span>Rivista: <strong>Mind</strong></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <span>Anno di Pubblicazione: <strong>2022</strong></span>
                  </div>
                </div>

              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="https://edicola.shop/le-scienze-mind-mente-cervello-il-futuro-nel-metaverso-n-208-aprile-2022-mensile.html">Sfoglia</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/Explore/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="../assets/images/riviste/pcb.png" alt="" style="border-radius: 20px;">
                <h4 class="twolines">Dove stiamo andando?</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-12">
                    <span>Rivista: <strong>PCB Magazine</strong></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <span>Anno di Pubblicazione: <strong>2021</strong></span>
                  </div>
                </div>

              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="https://shop.newbusinessmedia.it/products/pcb-magazine">Sfoglia</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- fine prima parte -->

  <div class="item-details-page-my">
    <div class="container">
      <div class="row">
        <!--<div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>View Details <em>For News</em> Here.</h2>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="left-image">
            <img src="https://api.time.com/wp-content/uploads/2023/03/GettyImages-1248323870.jpg?quality=85&w=800" alt="" style="border-radius: 20px; height: 350px; width: 500px">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h4><a href="https://time.com/6263475/gpt4-ai-projects/">GPT-4 Has Been Out for 1 Day. These New Projects Show Just How Much More Powerful It Is</a></h4>
          <span class="author">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b3/Time_Magazine_logo.svg" alt="" style="max-width: 50px; border-radius: 50%;">
            <h6>Time<br><a href="time">@time</a></h6>
          </span>
          <p>On March 14, OpenAI officially announced the launch of the large multimodal model GPT-4</p>
          <div class="row">
            <div class="col-3">
              <span class="bid">
                Author<br><strong>Nik Popli</strong><br>
              </span>
            </div>
            <div class="col-4">
              <span class="owner">
                Year<br><strong>03/15/2023</strong><br>
              </span>
            </div>
            <div class="col-5">
              <span class="ends">
                Category<br><strong>Chat GPT</strong><br>
              </span>
            </div>
          </div>
          <form action="http://localhost:63342/FuturisticAI_Library/Ai_Library/create.html">
            <button type="submit" id="form-submit" class="main-button">Add to Favorites</button>
            <button type="submit" id="form-submit" class="main-button">Check Availability</button>
          </form>
        </div> -->

        <!--   <div class="col-lg-12">
             <div class="current-bid">
               <div class="row">
                 <div class="col-lg-6">
                   <div class="mini-heading"><h4>News of the Month</h4></div>
                 </div>
                 <div class="col-lg-6">
                   <fieldset>
                     <select name="Category" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                         <option selected>Sort By: Latest</option>
                         <option type="checkbox" name="option1" value="old">Sort By: Oldest</option>
                         <option value="ASC">Sort By: Author (A-Z)</option>
                         <option value="DESC">Sort By: Author (Z-A)</option>
                       <option value="most">Sort By: Popularity (most)</option>
                       <option value="least">Sort By: Popularity (least)</option>
                     </select>
                 </fieldset>
                 </div>
                 <div class="col-lg-4 col-md-6">
                   <div class="item">
                     <div class="left-img">
                       <img src="https://wp.technologyreview.com/wp-content/uploads/2023/02/MA23-front.cover_.png?fit=848,1164" alt="" style="width: 190px; height: 300px">
                     </div>
                     <div class="right-content">
                       <h4>MIT Technology Review</h4>
                       <a href="https://www.instagram.com/technologyreview/">@technologyreview</a><br>
                       <div class="line-dec"></div>
                       <h6>Author: <em>Rachel Gordon</em></h6>
                       <h6>Date: <em>04/03/2023</em></h6>
                       <h6>Category: <em>Robot</em></h6>
                       <form action="http://localhost:63342/FuturisticAI_Library/Ai_Library/create.html">
                         <button type="submit" id="form-submit" class="main-button">Add to Favorites</button>
                         <button type="submit" id="form-submit" class="main-button">Check Availability</button>
                       </form>
                     </div>
                   </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                   <div class="item">
                     <div class="left-img">
                       <img src="assets/images/current-02.jpg" alt="">
                     </div>
                     <div class="right-content">
                       <h4>How to worry wisely about AI</h4>
                       <a href="https://www.instagram.com/theeconomist/">@TheEconomist</a>
                       <div class="line-dec"></div>
                       <h6>Author: <em>Rachel Gordon</em></h6>
                       <h6>Date: <em>04/03/2023</em></h6>
                       <h6>Category: <em>Robot</em></h6>
                       <form action="http://localhost:63342/FuturisticAI_Library/Ai_Library/create.html">
                         <button type="submit" id="form-submit" class="main-button">Add to Favorites</button>
                         <button type="submit" id="form-submit" class="main-button">Check Availability</button>
                       </form>
                     </div>
                   </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                   <div class="item">
                     <div class="left-img">
                       <img src="assets/images/current-03.jpg" alt="">
                     </div>
                     <div class="right-content">
                       <h4>David Walker</h4>
                       <a href="#">@davidwalker</a>
                       <div class="line-dec"></div>
                       <h6>Author: <em>Rachel Gordon</em></h6>
                       <h6>Date: <em>04/03/2023</em></h6>
                       <h6>Category: <em>Robot</em></h6>
                       <form action="http://localhost:63342/FuturisticAI_Library/Ai_Library/create.html">
                         <button type="submit" id="form-submit" class="main-button">Add to Favorites</button>
                         <button type="submit" id="form-submit" class="main-button">Check Availability</button>
                       </form>
                     </div>
                   </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                   <div class="item">
                     <div class="left-img">
                       <img src="https://assets.bizclikmedia.net/300/a44855dfd7fee2d50eadf6881764b253:6df0aaf4ba79e30b71aaaf193e4f789f/01-ai-cover-apr2023.jpg" alt="" style="height: 300px; width:  190px" >
                     </div>
                     <div class="right-content">
                       <h4>AI.Magazine</h4>
                       <a href="https://www.instagram.com/ai.magazine/">@ai.magazine</a>
                       <div class="line-dec"></div>
                       <h6>Date: <em>April 2023</em></h6>
                       <h6>Category: <em>AI</em></h6>
                       <form action="http://localhost:63342/FuturisticAI_Library/Ai_Library/create.html">
                         <button type="submit" id="form-submit" class="main-button">Add to Favorites</button>
                         <button type="submit" id="form-submit" class="main-button">Check Availability</button>
                       </form>
                     </div>
                   </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                   <div class="item">
                     <div class="left-img">
                       <img src="https://assets.bizclikmedia.net/300/40c472d8d5bad4969c92a2629ac80bef:619bb006d6922d173f74e7a33a797ee5/cyber-march23.png" alt="" style="height: 300px; width: 190px">
                     </div>
                     <div class="right-content">
                       <h4>Cyber Magazine</h4>
                       <a href="https://www.instagram.com/cyber_mag/">@cyber_mag</a>
                       <div class="line-dec"></div>
                       <h6>Date: <em>March 2023</em></h6>
                       <h6>Category: <em>Cybersecurity</em></h6>
                       <form action="http://localhost:63342/FuturisticAI_Library/Ai_Library/create.html">
                         <button type="submit" id="form-submit" class="main-button">Add to Favorites</button>
                         <button type="submit" id="form-submit" class="main-button">Check Availability</button>
                       </form>
                     </div>
                   </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                   <div class="item">
                     <div class="left-img">
                       <img src="https://assets.bizclikmedia.net/300/1fea77ec01a12a46c1ed1538d1c01269:3246fdd5bee0f5bb82df4af8ebbe514b/tech-apr23.png" alt="" style="width: 190px; height: 300px">
                     </div>
                     <div class="right-content">
                       <h4>Technology</h4>
                       <a href="https://www.instagram.com/technologymagbc/">@technologymagbc</a>
                       <div class="line-dec"></div>
                       <h6>Date: <em> April 2023</em></h6>
                       <h6>Category: <em>Informatics</em></h6>
                       <form action="http://localhost:63342/FuturisticAI_Library/Ai_Library/create.html">
                         <button type="submit" id="form-submit" class="main-button">Add to Favorites</button>
                         <button type="submit" id="form-submit" class="main-button">Check Availability</button>
                       </form>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>-->
        <div class="col-lg-12">
          <div class="section-heading">
            <!--<div class="line-dec"></div>-->
            <h1>Rivista del <em>Mese</em></h1>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="left-image">
            <img src="../assets/images/riviste/tecnologiaeinnovazione.png" alt="" style="align-content: center; height: 700px; width: 500px">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h4><a href="https://tinnovamag.com/read-online/">Intelligenza Artificiale e Imprese</a></h4>
          <span class="author">
            <img src="../assets/images/riviste/teceinnlogo.png" alt="" style="max-width: 50px; border-radius: 50%;">
            <h6>Tecnologia e Innovazione<br><a href="https://www.facebook.com/tecnologiaeinnovazionemag/?locale=it_IT">@tecnologiainnovazione</a></h6>
          </span>
          <p>Tecnologia & Innovazione è la rivista che divulga le più importanti innovazioni tecnologiche nel contesto industriale e aziendale italiano. La rivista mappa dall’interno i principali processi di cambiamento dei settori trainanti Made in Italy: dall’automotive alla moda, dal food&beverage al settore dell’arredamento e dell’automazione.</p>
          <div class="row">
            <div class="col-3">
              <span class="bid">
                Mese<br><strong>Marzo</strong><br>
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

            <form action="C:\Users\maria\PhpstormProjects\FuturisticAI_Library\Ai_Library\news.html">
              <button type="submit" id="form-submit" class="main-button">Sfoglia</button>
              <!--
              <button type="submit" id="form-submit" style="float: right" class="main-button">Controlla la Disponibilità</button>-->
            </form>

        </div>
      </div>
    </div>
  </div>

  <!-- fine seconda parte -->
        <!--
        <div class="col-lg-3 col-sm-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h4>10.</h4>
                <img src="assets/images/author.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Liberty Artist<br><a href="#">8.8 ETH or $16,800</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>11.</h4>
                <img src="assets/images/author-02.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>Anthony Brown<br><a href="#">7.5 ETH or $15,400</a></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h4>12.</h4>
                <img src="assets/images/author-03.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                <h6>David Walker<br><a href="#">5.2 ETH or $12,300</a></h6>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>-->

  <!--
  <div class="create-nft">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Create Your NFT & Put It On The Market.</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="login signup.php">Create Your NFT Now</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item first-item">
            <div class="number">
              <h6>1</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-02.png" alt="">
            </div>
            <h4>Set Up Your Wallet</h4>
            <p>There are 5 different HTML pages included in this NFT <a href="https://templatemo.com/page/1" target="_blank" rel="nofollow">website template</a>. You can edit or modify any section on any page as you required.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <div class="number">
              <h6>2</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <h4>Add Your Digital NFT</h4>
            <p>If you would like to support our TemplateMo website, please visit <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">our contact page</a> to make a PayPal contribution. Thank you.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-06.png" alt="">
            </div>
            <h4>Sell Your NFT &amp; Make Profit</h4>
            <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
-->
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="../assets/js/isotope.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>

  <script src="../assets/js/tabs.js"></script>
  <script src="../assets/js/popup.js"></script>
  <script src="../assets/js/custom.js"></script>
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