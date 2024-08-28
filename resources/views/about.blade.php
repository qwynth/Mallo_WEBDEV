<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>About - My Website</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="{{ url('/') }}">
            <h1><span>WEB</span>DEV</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/interest') }}">Interest</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>  
            <li><a href="{{ url('/contact') }}">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">WHO IS <span>Precious Gwynth</span>?</h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h2>I am Precious Gwynth A. Mallo, a third-year BSIT Student at College of Science in Bicol University.</h2>
          </div>
          <div class="project-img">
            <img src="./img/logo.JPG" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h2>19 years of age, from Rizal St., Barangay 3, Pioduran Albay.</h2>
          </div>
          <div class="project-img">
            <img src="./img/ganda.JPG" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h2>I play Archery and other sports like badminton and soccer.</h2>
          </div>
          <div class="project-img">
            <img src="./img/archery.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h2>We have 8 fur babies, namely shuvie, shiloh, clingy, biscuit, cookie, ginger, onion and garlic.</h2>
          </div>
          <div class="project-img">
            <img src="./img/shuvie.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h2>And this is my family.</h2>
          </div>
          <div class="project-img">
            <img src="./img/fam.jpg" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>WEB</span>DEV</h1>
      </div>
      <h2>PRECIOUS GWYNTH MALLO | BSIT 3C</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/preciousgwynth.avilamallo"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/qwayynyth/"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
        <img src="{{ asset('img/logo.JPG') }}" alt="img">
        </div>
      </div>
      <p>All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>