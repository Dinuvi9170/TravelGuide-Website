<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walkers</title>
    <link rel="icon" href="img/walkers-footer.png">

    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    <link rel="stylesheet" href="css/style-home.css" />


  </head>

  <body>

    <!--NavBar--------------------------------------------Start-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"
        ><img src="img/walkers.png " style="width: 40px; height: auto" alt=""
      /></a>
      <h5 style="font-weight: 800"></h5>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-2">
          <li class="nav-item">
            <a
              class="nav-link btn btn-outline-light"
              aria-current="page"
              href="#index-home.php"
              >Home</a>
          </li>
          <li class="nav-item">
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Catogaries
                  </a>
                  <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="#index-home.php">Wild-Life & Safari</a></li>
                    <li><a class="dropdown-item" href="#index-RW.php">Rainforests & Waterfalls</a></li>
                    <li><a class="dropdown-item" href="#">Beaches & Activities</a></li>
                    <li><a class="dropdown-item " href="#">Heritage & Religious</a></li>
                    <li><a class="dropdown-item " href="#">Hiking, Camping & Adventure</a></li>
                    <li><a class="dropdown-item" href="#">Accomedations</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light" href="#">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light" href="#">Join Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--NavBar--------------------------------------------------------End-->


    <!--Carousel-Video--------------------------------------------Start-->

    <body class="carousel " data-mdb-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <video class="img-fluid carousel-video" autoplay loop muted>
            <source src="img/Video.mp4" type="video/mp4" />
          </video>
          <div class="carousel-caption d-none d-md-block ">
            <button type="button" class="btn btn-dark btn-rounded btnvideo">Join Us</button>
          </div>
        </div>
      </div>
      <!--Carousel-Video---------------------------------------------End-->


      <!--Start sec 1------------------------------------------------Start-->
      <div class="container sec1">
        <div class="row">
          <div class="col-md-8">
            <div style="padding-top: 50px; padding-bottom: 50px;">
              <h1><span style="font-weight: 100;">Walkers </span><span style="font-weight: 700; font-size: larger;">Sri
                  Lanka</span></h1>
              <p>"Explore Sri Lanka's tropical paradise: pristine beaches, ancient temples, lush tea plantations, and diverse wildlife. 
                Immerse in rich culture, savor exotic cuisine, and experience warm hospitality in this captivating island nation."
              </p>
              <button id="explore" type="button" class="btn btn-dark btn-rounded  btn1" onclick="explore()">Explore Now</button>
            </div>
          </div>
          <div class="col-md-4">
            <div style="text-align: center;">
              <img src="img/Sri Lankapng.png" alt="" style="max-width: 350px; opacity: 50%;">
            </div>
          </div>
        </div>
      </div>
      <!--Start sec 1---------------------------------------------------End-->

      <div id="popup" class="popup">
      <div class="map-sec container">
        <div class="map-content">
            <ul>
              <li><a href="" onclick="changemapNP()" target="iframe">NORTHERN PROVINCE</a></li>
              <li><a href="" onclick="changemapNC()">NORTH CENTRAL PROVINCE</a></li>
              <li><a href="" onclick="changemapNW()">NORTH WESTERN PROVINCE</a></li>
              <li><a href="" onclick="changemapWP()">WESTERN PROVINCE</a></li>
              <li><a href="" onclick="changemapSP()">SOUTHERN PROVINCE</a></li>
              <li><a href="" onclick="changemapCP()">CENTRAL PROVINCE</a></li>
              <li><a href="" onclick="changemapSG()">SABARAGAMUWA PROVINCE</a></li>
              <li><a href="" onclick="changemapEP()">EASTERN PROVINCE</a></li>
              <li><a href="" onclick="changemapUP()">UVA PROVINCE</a></li>
            </ul>
        </div>
        <div class="map-frame">
          <iframe id="map" name="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2023603.3984529274!2d79.38684107404846!3d7.858350407634197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2slk!4v1690753353697!5m2!1sen!2slk" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <button id="hide" type="button" class="btn btn-dark btn-rounded  btn1 mb-5 hide" onclick="hide()">Hide</button>
      </div>
    </div>
      
      <!--Cards--------------------------------------------------------Start-->
      <section id="cards">
        <div class="container mt-5 mb-5 card-sec">
          <div class="row">
            <div class="col">
              <div class="container mt-3 mb-5 ms-2 ">
                <div class="cards">
                  <img src="img/wild-home.jpg" alt="">
                  <div class="open">
                    <h2>Wild-Life & Safari</h2>
                  </div>
                  <div class="text">
                    <h2>Wild-Life & Safari</h2>
                    <p>Sri Lanka is second to none in terms of its biodiversity and can be considered the best for big game safaris outside the African continent.
                       As bold a statement as that may be, Sri Lanka’s wildlife credentials speak for itself.</p>
                       <button type="button" class="btn btn-dark btn-rounded ms-2 btn1"><a href="">Our Team</a></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="container mt-3 mb-5 ms-2">
                <div class="cards">
                  <img src="img/waterfall3-home.jpg" alt="">
                  <div class="open">
                    <h2>Rainforests & Waterfalls</h2>
                  </div>
                  <div class="text">
                    <h2>Rainforests & Waterfalls</h2>
                    <p>There are 8 very beautiful waterfalls and unlimited waterways at Pitadeniya entrance to Sinharaja forest.
                       Those are Kekuna falls, Pathanoya falls, Malmora falls, Brahmana falls, Galdoru falls, Uran Wetuna falls, 
                      Thattu falls and Duwili falls.</p>
                      <button type="button" class="btn btn-dark btn-rounded ms-2 btn1"><a href="">Our Team</a></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="container mt-3 mb-5 ms-2">
                <div class="cards">
                  <img src="img/beach-home.jpg" alt="">
                  <div class="open">
                    <h2>Beaches & Activities</h2>
                  </div>
                  <div class="text">
                    <h2>Beaches & Activities</h2>
                    <p>Sri Lanka beaches are a slice of heaven, well known for their idyllic scenery, colorful wildlife, 
                      and excellent surfing. From east to west, every beach has its own unique character, 
                      from white sand bars and tidal islands to palm tree beach swings and bohemian beach bars.</p>
                      <button type="button" class="btn btn-dark btn-rounded ms-2 btn1"><a href="">Our Team</a></button>
                  </div>
                </div>
              </div>
            </div>
            <!--2nd row-->
          </div>
          <div class="row">
            <div class="col">
              <div class="container mt-3 mb-5 ms-2 ">
                <div class="cards">
                  <img src="img/heritage-home.jpg" alt="">
                  <div class="open">
                    <h2>Heritage & Religious</h2>
                  </div>
                  <div class="text">
                    <h2>Heritage & Religious</h2>
                    <p>Sri Lanka is one of the few countries with a very vast and rich cultural diversity. 
                      The culture is itself very unique and thereby contributes to the Sri Lankan identity. Sri Lankan culture includes a lot of customs and rituals,
                       which date to more than 2000 years which were handed down from generation to generation.</p>
                       <button type="button" class="btn btn-dark btn-rounded ms-2 btn1"><a href="">Our Team</a></button>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col">
              <div class="container mt-3 mb-5 ms-2">
                <div class="cards">
                  <img src="img/camping-home.jpg" alt="">
                  <div class="open">
                    <h2>Hiking, Camping & Adventure</h2>
                  </div>
                  <div class="text">
                    <h2>Hiking, Camping & Adventure</h2>
                    <p>When people think of Sri Lanka, beaches, temples, and historical monuments are what comes to the mind. However, you can also plan for Sri Lanka 
                      adventure holidays by including these best adventure places to visit in Sri Lanka in your itinerary.</p>
                      <button type="button" class="btn btn-dark btn-rounded ms-2 btn1"><a href="">Our Team</a></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="container mt-3 mb-5 ms-2">
                <div class="cards">
                  <img src="img/Accommodations-home.jpg" alt="">
                  <div class="open">
                    <h2>Hotels & Accommodation</h2>
                  </div>
                  <div class="text">
                    <h2>Hotels & Accommodation</h2>
                    <p>Sri Lanka Hotels and Places to Stay</p>
                    <button type="button" class="btn btn-dark btn-rounded ms-2 btn1"><a href="">Our Team</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Cards-----------------------------------------------------------End-->


      <!--Join Us-------------------------------------------------------Start-->
      <div class="container-fluid joinus-home">
        <div class="container" style="text-align: center; padding: 15px;">
          <h2>Join Us</h2>
          <p>"Discover the wonders of Sri Lanka with Walkers Sri Lanka! Embark on unforgettable journeys to pristine beaches, 
            ancient ruins, and lush jungles. Immerse in local culture, indulge in mouthwatering cuisine, and experience personalized, 
            guided tours with our passionate team of travel enthusiasts. Join us for a remarkable adventure!"</p>
          <button type="button" class="btn btn-dark btn-rounded me-1 btn1">Log in</button>
          <button type="button" class="btn btn-dark btn-rounded ms-1 btn1">Sign up</button>
        </div>
      </div>
      <!--Join Us-------------------------------------------------------End-->




      <!--Dummy--------------------------------------------------------Start-->
      <div class="container mt-5 mb-5">
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quo accusamus non dolor aspernatur adipisci rem
          unde magni odit blanditiis quasi fuga officiis totam alias, omnis sunt impedit, explicabo molestias commodi
          ipsam placeat quaerat quae ea cumque. A animi libero illum cum aliquam autem alias mollitia dolore, doloribus
          quod nam ipsa beatae suscipit facere architecto velit, reiciendis optio sequi laudantium consequatur rerum,
          hic perspiciatis aperiam. Nam quidem temporibus quia aut.</p> -->
          <br>
          <br>
      </div>
      <!--Dummy--------------------------------------------------------End-->




      <!--Footer-------------------------------------------------Start-->
      <footer class="footer">
        <div class="container" style="text-align: center;">
          <div class="row">
            <div class="footer-col col-md-4 mt-3 ">
              <ul style="list-style-type:none;">
                <div class="footer-img">
                  <img src="img/walkers-footer.png" alt="" style="max-width: 200px;">
                </div>
              </ul>
            </div>
            <div class="footer-col col-md-2 mt-3 ">
              <ul style="list-style-type:none;">
                <h5 class="footer-topics">Menu</h5>
                <li class="footer-listed-items"><a href="www.google.com">Home</a></li>
                <li class="footer-listed-items"><a href="www.google.com">FAQ</a></li>
                <li class="footer-listed-items"><a href="www.google.com">About Us</a></li>
                <li class="footer-listed-items"><a href="www.google.com">Join Us</a></li>
              </ul>
            </div>
            <div class="footer-col col-md-2 mt-3">
              <ul style="list-style-type:none;">
                <h5 class="footer-topics">Catogaries</h5>
                <li class="footer-listed-items"><a href="www.google.com" target="_blank">Heritage</a></li>
                <li class="footer-listed-items"><a href="www.google.com" target="_blank">Beaches</a></li>
                <li class="footer-listed-items"><a href="www.google.com" target="_blank">Wild-Life</a></li>
                <li class="footer-listed-items"><a href="www.google.com" target="_blank">Rainforests</a></li>
                <li class="footer-listed-items"><a href="www.google.com" target="_blank">Adventure</a></li>
                <li class="footer-listed-items"><a href="www.google.com" target="_blank">Accomedations</a></li>
              </ul>
            </div>
            <div class="footer-col col-md-4 mt-3">
              <h4>Contact Us</h4>
              <p class="contact-footer">www.walkers.srilanka@gmail.com</p>
              <button type="button" class="btn btn-dark btn-rounded ms-2 btn1"><a href="">Our Team</a></button>

            </div>
          </div>
        </div>
        <div style="height: 50px; max-width: 100%; background-color: rgb(134, 134, 134) ;" class="copyright-div">
          <p class="copyright">Copyright © 2023 Walkers Sri Lanka. All rights reserved</p>
        </div>
      </footer>
      <!--Footer--------------------------------------------------End-->


      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>


      <script src="js/main-home.js" type="text/javascript">

      </script>

    </body>

</html>