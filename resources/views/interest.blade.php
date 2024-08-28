<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Interest - My Website</title>
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

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Int<span>e</span>rest</h1>
        <p>A third-year BSIT student who feels determined to succeed and eager to learn about the constantly changing world of technology.</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <h2>Cyber Security</h2>
          <p> Refers to the practice of protecting systems, networks, and data from digital attacks, unauthorized access, damage, or theft. It encompasses a wide range of technologies, processes, and practices designed to safeguard information and maintain the integrity, confidentiality, and availability of data.</p>
        </div>
        <div class="service-item">
          <h2>Web Designing</h2>
          <p>The process of creating and designing the visual and functional aspects of websites. It involves a combination of creative and technical skills to develop a user-friendly, aesthetically pleasing, and effective online presence. Web design encompasses several aspects, including layout, color scheme, typography, graphics, and the overall user experience (UX).</p>
        </div>
        <div class="service-item">
          <h2>Data Analytics</h2>
          <p>The process of examining, cleaning, transforming, and modeling data to discover useful information, draw conclusions, and support decision-making. It involves applying various statistical, mathematical, and computational techniques to analyze data sets and extract meaningful insights. It is widely used across industries to enhance business operations and optimize processes.</p>
        </div>
        <div class="service-item">
          <h2>Computer Networks</h2>
          <p>Computer networks refer to interconnected systems of computers and other devices that communicate and share resources, such as data, files, printers, and internet connections. These networks allow devices to exchange information and collaborate, enabling various functionalities from simple file sharing to complex distributed computing.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

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