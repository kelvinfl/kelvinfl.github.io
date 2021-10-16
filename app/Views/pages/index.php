<?= $this->extend('layout/template.php'); ?>


<?= $this->section('content'); ?>
    <!-- Jumbotron -->
    <section class="jumbotron text-center" style="padding-top: 8rem">
      <img src="/img/logo761.jpg" alt="logo" width="200" class="rounded-circle img-thumbnail" data-aos="fade-in"/>
      <h1 class="display-3" style="padding-top: 6rem;" ><span id="typed"></span></h1>
      <p class="lead"><span id="typedjum"></p></span>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,224L48,213.3C96,203,192,181,288,192C384,203,480,245,576,240C672,235,768,181,864,176C960,171,1056,213,1152,218.7C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>

    </section>

    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center" style="padding-top: 22rem;">
          <div class="col" data-aos="fade-right">
            <h2>About Us</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4" data-aos="fade-right" data-aos-offset="10" data-aos-duration="1000" z>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos eligendi, reiciendis qui dolor fugit repudiandae eius ut! Quae, magni modi.</p>
          </div>
          <div class="col-md-4" data-aos="fade-left" data-aos-offset="10" data-aos-duration="2000">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione odit quas molestias esse autem quisquam architecto suscipit consectetur sint doloremque.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e1e9f7"
          fill-opacity="1"
          d="M0,64L26.7,90.7C53.3,117,107,171,160,181.3C213.3,192,267,160,320,128C373.3,96,427,64,480,80C533.3,96,587,160,640,165.3C693.3,171,747,117,800,117.3C853.3,117,907,171,960,176C1013.3,181,1067,139,1120,149.3C1173.3,160,1227,224,1280,245.3C1333.3,267,1387,245,1413,234.7L1440,224L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- Akhir About -->

    <!-- Projects -->
    <section id="projects">
      <div class="container" style="padding-top: 6rem;">
        <div class="row text-center">
          <div class="col" data-aos="flip-up" data-aos-duration="1000">
            <h2>Our Projects</h2>
          </div>
        </div>
      </div>
      <div class="row" data-aos="flip-up" data-aos-duration="1000">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="/img/foto1.jpg" class="card-img-top" alt="foto1" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="flip-up" data-aos-duration="1000">
          <div class="card">
            <img src="/img/foto1.jpg" class="card-img-top" alt="foto1" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="flip-up" data-aos-duration="1000">
          <div class="card">
            <img src="/img/foto1.jpg" class="card-img-top" alt="foto1" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- Akhir Projects -->

    <!-- Kontak -->
    <section id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col" data-aos="fade-left" data-aos-duration="2000">
            <h2>Contact Me</h2>
            <a href="https://wa.me/081268876008"><img src="/img/wa.png" width=80, height= 80></img></a>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,224L40,218.7C80,213,160,203,240,202.7C320,203,400,213,480,218.7C560,224,640,224,720,224C800,224,880,224,960,213.3C1040,203,1120,181,1200,170.7C1280,160,1360,160,1400,160L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- Akhir Kontak -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center p-3">
      <p>© 2021 VIMCOM All Rights Reserved</p>
    </footer>






<?= $this->endSection(); ?>