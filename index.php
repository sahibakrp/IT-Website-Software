<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keep Up||IT Website</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <!-- ******preloader******** -->
  <!-- <div class="loader">
        <img src="./img/Loader.gif" alt="">
    </div>
   <div class="img">
    <img src="https://source.unsplash.com/200x200" alt="">
   </div> -->


  <div class="top-bar">
    <div class="first-bar">
      <p><i class="fa-solid fa-envelope"></i> info@gmail.com</p>
    </div>
    <div class="side-nav">
      <ul>
        <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i> </a></li>
        <li><a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter"></i> </a></li>
        <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i> </a></li>
        <li><a href="https://in.linkedin.com/"><i class="fa-brands fa-linkedin"></i> </a></li>
      </ul>
    </div>
  </div>


  <nav class="mynavbar">
    <div class="logo"><a href="index.php"><img src="./img/logo.png" alt=""></a></div>
    <ul class="mynav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="About.php">About</a></li>
      <li><a href="Services.php">Services</a></li>
      <li><a href="Portfolio.php">Portfolio</a></li>
      <li><a href="Contact.php">Contact</a></li>
    </ul>
    <!-- <div class="burger">&#9776;</div> -->
    <div class="mobile-menu-btn">
      <button class="menu-btn" onclick="toggleMobileMenu()">&#9776;</button>
    </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top:  9%;">
    <!-- <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> -->
    <div class="carousel-inner">
      <div class="carousel-item active img">
      <div class="overlay"></div>
        <img src="./img/Crousel 1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption  d-md-block text-black">
          <h2>Empowering Your
            Business <br>With
            Technology</h2>
          <p>Our objective is to provide aspirant companies with software products that are
            quality-focused. We want to believe in gaining the trust of our clients at an affordable cost.</p>
          <!-- <button class="btn btn-primary nn" type="submit">Read More</button> -->
        </div>
      </div>
      <div class="carousel-item img">
        <div class="overlay"></div>
        <img src="./img/Crousel 2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption  d-md-block text-black">
          <h2>Welcome to
            Obicule Technologies
            Private Limited</h2>
          <p>Obicule Technologies Pvt. Ltd. is one of the leading IT services company in India.
            It was founded on 23 June 2021.Our committed team, which has expertise in coming up with
            fresh ideas across the range, is ready to help you grow your company.</p>
          <!-- <button class="btn btn-primary " type="submit">Read More</button> -->
        </div>
      </div>
      <div class="carousel-item img">
      <div class="overlay"></div>
        <img src="./img/Crousel 3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption  d-md-block text-black heading2">
          <h2>Accelerating Your
            Digital journey with our team</h2>
          <p>We use the latest technologies and programming languages to ensure that
            your client’s websites and applications are user-friendly, responsive, and secure.
            Our goal is to make your life easier and more comfortable, whether that's through our
            products or the information we provide on our website.</p>
          <!-- <button class="btn btn-primary nn" type="submit">Read More</button> -->
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

  <section class="about-us">

    <div class="row new-tt" data-aos="zoom-in">
      <div class="about-col">
        <h1>WHO WE ARE</h1>
        <h2>To be competitive in the rapidly changing technological environment of today's business world, businesses
          need the expertise and experience that IT service providers can provide.</h2>
        <p>We firmly believe in providing high-quality services that satisfy our clients in terms of cost effectiveness,
          technical support, customer happiness.</p>
        <a href="About.php" class="first-btn ">Read More</a>
      </div>
      <div class="about-col">
        <img src="./img/about.jpg" alt="">
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <h2 data-aos="zoom-in" class="aos-init aos-animate">Your Comfort is Our Priority</h2>
    </div>
    <div class="row new-tt mt-1 text-center aos-init aos-animate" style=" margin-top: -20px !important;"
      data-aos="fade-up">
      <div class="col-lg-4 py-3 px-3  wow fadeInUp">
        <div class="display-3 aos-init aos-animate" data-aos="flip-left" data-aos-easing="ease-out-cubic"
          data-aos-duration="2000"><span>
            <img src="./img/high.gif" alt="" style="width: 50px; height:50px;"></span></div>
        <h5>High Performance</h5>
        <p>Mission, skilled workforce, customer focus, innovation, drive high performance.</p>

      </div>
      <div class="col-lg-4 py-3 px-3  wow fadeInUp">
        <div class="display-3 aos-init aos-animate" data-aos="flip-left" data-aos-easing="ease-out-cubic"
          data-aos-duration="2000"><span>
            <img src="./img/price.gif" alt="" style="width: 50px; height:50px;"></span></div>
        <h5>Friendly Prices</h5>
        <p>Competitive pricing, quality products, customer satisfaction, friendly company.</p>

      </div>
      <div class="col-lg-4 py-3 px-3  wow fadeInUp">
        <div class="display-3 aos-init aos-animate" data-aos="flip-left" data-aos-easing="ease-out-cubic"
          data-aos-duration="2000"><span>
            <img src="./img/clock.gif" alt="" style="width: 60px; height:60px;"></span></div>
        <h5>No time-confusing</h5>
        <p>Efficient processes, timely delivery, quick response, time-saving company.</p>
      </div>

    </div>
  </section>


  <section class="servic " style="background-color: rgb(245, 245, 254);" data-aos="zoom-in">
    <div class="container">
      <h2>Check our Services</h2>

      <div class="services" data-aos="zoom-in-up">
        <div class="first-line " style="background-color: rgb(240, 228, 228);">
          <h6>Web Development</h6>
          <p>A website or web application is made through a process called web development. It is involves the
            development
            of the web application's front-end and back-end.</p>
        </div>
        <div class="first-line" style="background: rgb(228, 231, 217);">
          <h6>Mobile App Development</h6>
          <p>App development can be a valuable investment for businesses looking to improve customer engagement and
            reach new markets. We develop Android and IOS applications for our clients, startups, and enterprises.</p>
        </div>
        <div class="first-line" style="background: rgb(219, 247, 247);">
          <h6>Web Design</h6>
          <p>When we create a website design for your company, we focus on creating an attractive and user-friendly
            website that effectively communicates the company's brand.</p>
        </div>
        <div class="first-line" style="background: rgb(229, 205, 248);">
          <h6>Digital Marketing</h6>
          <p>We provide web design services that assist businesses in enhancing their online performance through digital
            marketing and numerous techniques. Our programmes drive sales, and increase return on investment.</p>
        </div>
        <div class="first-line" style="background: rgb(229, 205, 248);">
          <h6>Software Development</h6>
          <p>When Software development is a multi-stage process that starts with planning and ends with maintenance. The
            aim of software development is to design and produce software applications that are user-friendly,
            dependable, and efficient.</p>
        </div>
        <div class="first-line" style="background: rgb(208, 246, 220);">
          <h6>Software Testing</h6>
          <p>Obicule Technologies offers a unique and comprehensive testing solution that can revolutionize your
            software development process. With a commitment to excellence, innovative approaches, and a team of highly
            skilled professionals.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="container" data-aos="zoom-in">
    <h2>We are working with them</h2>
    <marquee behavior="" direction="left" scrollamount="10" style="margin-bottom:-5px;">
      <div class="companies">
        <div class="company-logo">
          <img src="./img/logo1.jpg" alt="">
        </div>

        <div class="company-logo">
          <img src="./img/logo2.jpg" alt="">
        </div>

        <div class="company-logo">
          <img src="./img/logo 3.jpg" alt="">
        </div>

        <div class="company-logo">
          <img src="./img/logo 4.jpg" alt="">
        </div>

        <div class="company-logo">
          <img src="./img/logo1.jpg" alt="">
        </div>

      </div>
    </marquee>
  </div>


  <!-- ----------------footer----------------- -->


  <footer>
    <div class="container-fluid">
      <div class="row tt">
        <div class="footer-col col-12 col-md-3">
          <h4><img src="./img/logo.png" alt="" style="width: 80%; margin-left: -40px;"></h4>
          <p><i class="fa-solid fa-location-dot"></i> H-15 305 BSI Business Park
            Noida, 201301, India</p>
          <p><i class="fa-solid fa-envelope"></i> info@obiculetechnologies.com</p>
          <p><i class="fa-solid fa-phone"></i> +91-8233739281</p>
        </div>
        <div class="footer-col col-12 col-md-3" id="fofo">
          <h4>Useful Links</h4>
          <ul class="list-footer">
            <li><a href="index.php"><i class="fa-solid fa-chevron-right"></i> HOME</a></li>
            <li><a href="About.php"><i class="fa-solid fa-chevron-right"></i> ABOUT</a></li>
            <li><a href="Services.php"><i class="fa-solid fa-chevron-right"></i> SERVICS</a></li>
            <li><a href="Portfolio.php"><i class="fa-solid fa-chevron-right"></i> PORTFOLIO</a></li>
            <li><a href="Contact.php"><i class="fa-solid fa-chevron-right"></i> CONTACT US</a></li>
          </ul>
        </div>
        <div class="footer-col col-12 col-md-3" id="menu">
          <h4>Our Services</h4>
          <ul class="list-footer">
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Web Development</a></li>
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> App Development</a></li>
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Software Development</a></li>
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Software Testing</a></li>
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Web Design</a></li>
          </ul>
        </div>

        <div class="footer-col col-12 col-md-3" id="fof">
          <h4>Social Networks</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://in.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <Section class="foot">
    <p>Copyright©2024 Obicule. All rights reserved.</p>
  </Section>

  <!-- ***************footer end here****************** -->
  <!-- *******AOS Script********* -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- **********Script JS********* -->
  <script src="script.js"></script>

  <!-- *********bootstrap JS********* -->
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <script>
    AOS.init({
      offset: 200, duration: 1500,
    });
  </script>
</body>

</html>