<?php

  @include 'config.php';
  session_start();

  if(!isset($_SESSION['user_name'])){
    header('location:index.php');
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Resturant website with html and css</title>
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    
    <title>Resturant website with html and css</title>
  </head>

  <body>
    <!-- header section start-->
    <header>
      <a href="#" class="logo"><img src="images/logo.png" /></a>
      <nav class="navbar">
        <a href="#home" class="active">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#team">team</a>
        <a href="#reservation">reservation</a>
        <a href="#blog">blog</a>
        <a href="#">
            <?php
                echo $_SESSION['user_name'];
            ?>
        </a>
        <a href="images/logout.php">Logout</a>
      </nav>
      <div class="icons">
        <i class="fas fa-bars"></i>
        <i class="fas fa-search"></i>
        <i class="fas fa-heart"></i>
        <i class="fas fa-shopping-cart"></i>
      </div>
    </header>
    <div class="home" id="home">
      <div class="swiper home-slider">
        <div class="swiper-wrapper wrapper">
          <div class="swiper-slide slide slide1">
            <div class="content">
              <img src="images/crown-symbol.png" />
              <h3>delicious royate</h3>
              <h1>gift voucher</h1>
              <p>give away your beloved customers</p>
              <a href="#" class="btn">0rder now</a>
            </div>
          </div>
          <div class="swiper-slide slide slide2">
            <div class="content">
              <img src="images/crown-symbol.png" />
              <h3>sale of 10% this dish</h3>
              <h1>the fresh</h1>
              <p>food resturant</p>
              <a href="#" class="btn">0rder now</a>
            </div>
          </div>
          <div class="swiper-slide slide slide3">
            <div class="content">
              <img src="images/crown-symbol.png" />
              <h3>we are open now</h3>
              <h1>fresh fruits</h1>
              <p>you will love it</p>
              <a href="#" class="btn">0rder now</a>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <section class="welcome" id="about">
      <h1 class="heading">WELCOME TO ROYATE</h1>
      <center><h3 class="sub-heading">~ Luxury and Quality</h3></center>
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/post-thumb-1.jpg" />
          </div>
          <div class="content">
            <h3>PROFESSIONAL LEVEL</h3>
            <p>
              nor again is there anyone who loves or pursues or desires to
              obtain pain of itself,because it is pain,but because occasionally
              circumstances occur.
            </p>

            <a href="#" class="btn">Read More</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/post-thumb-2.jpg" />
          </div>

          <div class="content">
            <h3>FRESH FOOD GUARANTEED</h3>
            <p>
              nor again is there anyone who loves or pursues or desires to
              obtain pain of itself,because it is pain,but because occasionally
              circumstances occur.
            </p>
            <a href="#" class="btn">Read More</a>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/post-thumb-3.jpg" />
          </div>

          <div class="content">
            <h3>THE MENU IS PLENTIFUL</h3>
            <p>
              nor again is there anyone who loves or pursues or desires to
              obtain pain of itself,because it is pain,but because occasionally
              circumstances occur.
            </p>
            <a href="#" class="btn">Read More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- our menu section start -->
    <section class="our-menu" id="menu">
      <h1 class="heading">our food menu</h1>
      <center><h3 class="sub-heading"> ~ see what we offer ~ </h3></center>

      <div class="menu-container">
        <div class="item">
          <div class="item-name">
            <h2>Main Course</h2>
            <img src="images/notify.png">
          </div>
          <div class="item-body">
            <div class="item-menu">
              <h3>Super-Delicious Zuppa Toscana</h3>
              <span class="dots"></span>
              <h3>$40</h3>

              <ul>
                <li><a href="#">Chicken</a></li>
                <li><a href="#">Italian</a></li>
                <li><a href="#">Sausage</a></li>
                <li><a href="#">Spinach</a></li>
              </ul>
            </div>
            <div class="item-menu">
              <h3>Super-Delicious Zuppa Toscana</h3>
              <span class="dots"></span>
              <h3>$26</h3>

              <ul>
                <li><a href="#">Mashrooms</a></li>
                <li><a href="#">Italian</a></li>
                <li><a href="#">Sausage</a></li>
                <li><a href="#">Spinach</a></li>
              </ul>
            </div>
          </div>
        </div>
                  <div class="item">
                    <div class="item-name">
                      <h2>Soups and Salad</h2>
                      <img src="images/soups-and-salads.png">
                    </div>
                    <div class="item-body">
                      <div class="item-menu">
                        <h3>Super-Delicious Soups</h3>
                        <span class="dots"></span>
                        <h3>$40</h3>
          
                        <ul>
                          <li><a href="#">Chicken-Soup</a></li>
                          <li><a href="#">Corn-Soup</a></li>
                          <li><a href="#">Thai-Soup</a></li>
                          <li><a href="#">Mashroom-soup</a></li>
                        </ul>
                      </div>
                      <div class="item-menu">
                        <h3>Healthy and Fresh Salad</h3>
                        <span class="dots"></span>
                        <h3>$26</h3>
          
                        <ul>
                          <li><a href="#">Green Salad</a></li>
                          <li><a href="#">Chicken-Salad</a></li>
                          <li><a href="#">Cashewnut-Salad</a></li>
                          <li><a href="#">Mixed-Salad</a></li>
                        </ul>
                      </div>
                   </div>
                </div>
                            <div class="item">
                              <div class="item-name">
                                <h2>Drinks</h2>
                                <img src="images/drinks.png">
                              </div>
                              <div class="item-body">
                                <div class="item-menu">
                                  <h3>Coffee</h3>
                                  <span class="dots"></span>
                                  <h3>$40</h3>
                    
                                  <ul>
                                    <li><a href="#">Cappuccino</a></li>
                                    <li><a href="#">Cold-Coffe</a></li>
                                    <li><a href="#">Chocolate-Cold coffee</a></li>
                                    <li><a href="#">Lattee</a></li>
                                  </ul>
                                </div>
                                <div class="item-menu">
                                  <h3>Juice</h3>
                                  <span class="dots"></span>
                                  <h3>$26</h3>
                    
                                  <ul>
                                    <li><a href="#">Mango-Juice</a></li>
                                    <li><a href="#">Orange-Juice</a></li>
                                    <li><a href="#">Strawberry-Juice</a></li>
                                    <li><a href="#">Mixed-fruit Juice</a></li>
                                  </ul>
                                </div>
                               </div>
                                      </div>
                                      <div class="item">
                                        <div class="item-name">
                                          <h2>Desserts</h2>
                                          <img src="images/desserts.png">
                                        </div>
                                        <div class="item-body">
                                          <div class="item-menu">
                                            <h3>Super-Sweet and Delicious</h3>
                                            <span class="dots"></span>
                                            <h3>$40</h3>
                              
                                            <ul>
                                              <li><a href="#">Faluda</a></li>
                                              <li><a href="#">Chocolate-Cake</a></li>
                                              <li><a href="#">Lava-Cake</a></li>
                                              <li><a href="#">Nutella</a></li>
                                            </ul>
                                          </div>
                                          <div class="item-menu">
                                            <h3>Ice-Cream</h3>
                                            <span class="dots"></span>
                                            <h3>$26</h3>
                              
                                            <ul>
                                              <li><a href="#">Vanilla-Icecream</a></li>
                                              <li><a href="#">Chocolate-Icecream</a></li>
                                              <li><a href="#">Blueberry-Icecream</a></li>
                                              <li><a href="#">Coffee-Icecream</a></li>
                                            </ul>
                                          </div>
                                         </div>
        </div>
      </div>
     </section>
    <!-- our menu section ends -->
    <!-- our team section start -->
    <section class="our-team" id="team">
      <h1 class="heading">our talented chef</h1>
      <center>
        <h3 class="sub-heading"> ~ Experience and Enthuasiasm ~ </h3>
      </center>
      <div class="our-chef">
        <div class="item">
          <div class="image">
            <img src="images/our-chef-1.jpg">
          </div>
        <div class="chef-info">
          <div>
            <h3>Jerry Robertson</h3>
            <span>Master Chef</span>
            <ul>
                 <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
          </div>
        </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="images/our-chef-2.jpg">
          </div>
        <div class="chef-info">
          <div>
            <h3>Corol Rowshon</h3>
            <span>Master Chef</span>
            <ul>
                 <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
          </div>
        </div>
        </div>
        <div class="item">
          <div class="image">
            <img src="images/our-chef-3.jpg">
          </div>
        <div class="chef-info">
          <div>
            <h3>Taylor Maccoy</h3>
            <span>Master Chef</span>
            <ul>
                 <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    </section>

   <!-- our team section ends -->
   <!-- reservation section start -->
   <div class="reservation" id="reservation">
    <div class="image">
    </div>
    <div class="form">
      <h1 class="heading">book a table</h1>
      <center><h3 class="sub-heading"> ~ check out our place ~ </h3></center>
      <form>
        <div class="form-holder">
          <div>
            <select>
              <option>1 people</option>
              <option>2 people</option>
              <option>3 people</option>
              <option>4 people</option>
            </select>
            <input type="text" name="" placeholder="Time">
            <input type="text" name="" placeholder="Phone">
          </div>
          <div>
            <input type="text" name="" placeholder="Date">
            <input type="text" name="" placeholder="Name">
            <input type="email" name="" placeholder="email">
          </div>
        </div>
        <center><a href="#" class="btn">Book now</a></center>
      </form>
    </div>
   </div>
   <!-- reservation section ends -->
<!-- news section start  -->
<section class="blog welcome" id="blog">
  <h1 class="heading">latest news</h1>
  <center><h3 class="sub-heading"> ~ Great Articles ~ </h3></center>
  <div class="box-container">
    <div class="box">
      <div class="image">
        <img src="images/post-thumb-4.jpg">
      </div>
      <div class="content">
        <h3>PROFESSIONAL LEVEL</h3>
        <p>nor again is there anyone who loves or pursues or desires to
          obtain pain of itself,because it is pain,but because occasionally
          circumstances occur.</p>
          <a href="#">READ MORE</a>
          <img src="images/post-body-bg-1.png">
      </div>
    </div>
    <div class="box">
      <div class="image">
        <img src="images/post-thumb-5.jpg">
      </div>
      <div class="content">
        <h3>FRESH FOOD GUARANTEED</h3>
        <p>nor again is there anyone who loves or pursues or desires to
          obtain pain of itself,because it is pain,but because occasionally
          circumstances occur.</p>
          <a href="#">READ MORE</a>
          <img src="images/post-body-bg-2.png">
      </div>
    </div>
    <div class="box">
      <div class="image">
        <img src="images/post-thumb-6.jpg">
      </div>
      <div class="content">
        <h3>Fresh THE MENU IS PLENTIFUL</h3>
        <p>nor again is there anyone who loves or pursues or desires to
          obtain pain of itself,because it is pain,but because occasionally
          circumstances occur.</p>
          <a href="#">READ MORE</a>
          <img src="images/post-body-bg-3.png">
      </div>
    </div>
  </div>
</section>
<!-- news section ends  -->
<!-- footer section starts  -->
<section class="footer">
  <img src="images/logo.png" class="logo">
  <div class="container">
    <div>
      <h3>ABOUT US</h3>
      <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod</p>
    </div>
    <div>
      <h3>GET NEW OFFERS</h3>
      <input type="email" name="" placeholder="enter your email">
      <ul>
        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
      </ul>
  </div>
<div>
  <h3>CONTACT US</h3>
  <span>Creative Networks Tohana</span>
  <span>+(88) 017684785432</span>
  <span>creativenetworks001@gmail.com</span>
  <span>www.creativenetworks.in</span>
</div>
 </div>
 <p>&copy;2022 Reserved by creative networks</p>
</section>
<!-- <footer section ends  -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".home-slider", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 7500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        loop: true,
      });
    </script>
    <script type="text/javascript">
      let menu = document.querySelector('.fa-bars');
      let navbar = document.querySelector('.navbar');

      menu.onclick = () =>{
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
      }

    </script>
  </body>
</html>
