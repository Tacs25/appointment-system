<?php
  include_once 'header.php';
?>

      <!-- Carousel-->
      <div id="home">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/a1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold">Your Eyes Health Matters to Us</h5>
                <p>Get a good qualtiy service from Asuncion Optical.</p>
              </div>
            </div>
            <div class="carousel-item" id="img-2">
              <img src="img/a2.jpg" class="d-block w-100" alt="..." >
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold">Your Eyes Health Matters to Us</h5>
                <p>Get a good qualtiy service from Asuncion Optical.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/a3.jpg"  class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold">Your Eyes Health Matters to Us</h5>
                <p>Get a good qualtiy service from Asuncion Optical.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <!-- About -->
      <div id="about" class="container mt-5 pb-5">
        <div class="post-heading text-center">
          <h3 class="display-4 font-weight-bold">About Us</h3>
          <hr class="w-50 mx-auto pb-1">
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="img/d.jpg" class="img-fluid mt-3">
          </div>

          <div class="col-lg-6 col-md-6 col-12 mt-3">
            <h2>We care about your eyes</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <button type="button w-50" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
              KNOW MORE
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ABOUT US</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Services -->
      <div id="services" class="container mt-1 mb-5">
        <div class="post-heading text-center">
          <h3 class="display-4 font-weight-bold">Our Services</h3>
          <hr class="w-50 mx-auto pb-1">
          <p>We don’t just sell eyeglasses and sunglasses. We also see to it that you have the correct prescription. </p>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="img/fc.jpg" class="img-fluid mt-2">
          </div>

          <div class="col-lg-6 col-md-6 col-12 mt-3">
            <h2>Eye Checkup</h2>
            <hr>
            <p>Eye check-up is when an optometrist runs various tests to evaluate how healthy your eyes are. The tests you should expect during an eye exam are eye muscle test, visual acuity test, refraction assessment, and slit-lamp examination. We suggest to have your eyes checked every 1-2 years. Moreover, it can also detect other non-related eye diseases such as diabetes, high blood pressure, cancer, multiple sclerosis and rheumatoid arthritis, according to Reader’s Digest. Eye check-up is not only important for your vision but for your overall health and well-being as well.
            </p>
            
          </div>
        </div>

        <!--btn create account-->
        <div class="d-grid gap-2 col-6 mx-auto pt-5">
          <a class="btn btn-dark" type="button" href="main/signup.php">Create an account</a>
        </div>
      </div>

      <!-- testimonials -->
      <div id="services" class="container mt-1 mb-5">
        <div class="post-heading text-center">
          <h3 class="display-4 font-weight-bold">Testimonials</h3>
          <hr class="w-50 mx-auto pb-1">
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 col-12 mt-3 pb-2">
            <div class="card">
              <div class="card-body">
                <p class="card-text" style="text-align: center;"><em>"First time ko magpa check-up and sakto na sa Asuncion Optical ako nagpa check up. sobrang ganda ng Service nila, and very Approchable ng doctor."</em></p>
                <h5 class="card-title" style="text-align: center;">- Jan Jan -</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12 mt-3 pb-2">
            <div class="card">
              <div class="card-body">
                <p class="card-text" style="text-align: center;"><em>"Napakabait ng mga doctor, and malinis ang clinic. Sasabihin nila kung ano yung mga dapat iwasan para ma correct yung eyesight mo."</em></p>
                <h5 class="card-title" style="text-align: center;">- Eugene -</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12 mt-3 pb-2">
            <div class="card">
              <div class="card-body">
                <p class="card-text" style="text-align: center;"><em>"Yung Assistant ni doctor is very Approachable and Maalaga sa mga patient. and si doctor naman sobrang bait, maganda din mga frames."</em></p>
                <h5 class="card-title" style="text-align: center;">- Angel -</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
      
      <!--map-->
      <section id="map" class="pl-4 pr-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.597465277945!2d120.92281264876112!3d14.450346589848722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d29c2e9d1adf%3A0x2c342a9330e00f5!2sAsuncion%20Optical!5e0!3m2!1sen!2sph!4v1631771831096!5m2!1sen!2sph" width="100%" height="400" style="border: 2px; " allowfullscreen="" loading="lazy"></iframe>
      </section>  
        
       <!--footer-->

<?php
  include_once 'footer.php'
?>