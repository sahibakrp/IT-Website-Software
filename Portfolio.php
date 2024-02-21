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
    <div class="logo"><a href="index.php"><img src="./img/logo.png" alt=""  ></a></div>
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

  <div class=" service-img portfolio-img">
    <h2>Portfolio</h2>
  </div>

  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active" id="All">All</li>

            <li data-filter=".filter-web" id="projects">Projects</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="campus-col" id="one">
          <img src="./img/port 1.jpg" class="img-fluid" alt="">
          <div class="leyer">
            <h3>PSS Technos</h3>
          </div>
        </div>

        <div class="campus-col" id="two">
          <img src="./img/port 2.jpg" class="img-fluid" alt="">
          <div class="leyer"> 
            <h3>GHT Techno</h3>
          </div>
        </div>

        <div class="campus-col" id="three">
          <img src="./img/port 4.jpg" class="img-fluid" alt="">
          <div class="leyer">
            <h3> ABS Techno</h3>
          </div>
        </div>

        <div class="campus-col" id="four">
          <img src="./img/port 7.jpg" class="img-fluid" alt="">
          <div class="leyer">
            <h3>FFF services</h3>
          </div>
        </div>

        <div class="campus-col" id="five">
          <img src="./img/port 6.jpg" class="img-fluid" alt="">
          <div class="leyer">
            <h3>INFO Techno</h3>
          </div>
        </div>

        <div class="campus-col" id="six">
          <img src="./img/port 5.jpg" class="img-fluid" alt="">
          <div class="leyer">
            <h3>PSS services</h3>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ----------------footer----------------------- -->


  <footer>
    <div class="container-fluid">
      <div class="row tt">
        <div class="footer-col col-3">
          <h4><img src="./img/logo.png" alt="" style="width: 80%;margin-left: -40px;"></h4>
          <p><i class="fa-solid fa-location-dot"></i> H-15 305 BSI Business Park
            Noida, 201301, India</p>
          <p><i class="fa-solid fa-envelope"></i> info@obiculetechnologies.com</p>
          <p><i class="fa-solid fa-phone"></i> +91-8233739281</p>
        </div>
        <div class="footer-col col-3" id="fofo">
          <h4>Useful Links</h4>
          <ul class="list-footer">
            <li><a href="index.php"><i class="fa-solid fa-chevron-right"></i> HOME</a></li>
            <li><a href="About.php"><i class="fa-solid fa-chevron-right"></i> ABOUT</a></li>
            <li><a href="Services.php"><i class="fa-solid fa-chevron-right"></i> SERVICS</a></li>
            <li><a href="Portfolio.php"><i class="fa-solid fa-chevron-right"></i> PORTFOLIO</a></li>
            <li><a href="Contact.php"><i class="fa-solid fa-chevron-right"></i> CONTACT US</a></li>
          </ul>
        </div>
        <div class="footer-col col-3" id="menu">
          <h4>Our Services</h4>
          <ul class="list-footer">
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Web Development</a></li>
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> App Development</a></li>
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Software Development</a></li>
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Software Testing</a></li>
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Web Design</a></li>
          </ul>
        </div>

        <div class="footer-col col-3" id="fof">
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
  <script src="jquery.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <script>
    AOS.init({
      offset: 200, duration: 1500,
    });
  </script>
  
  <script>
  $("#projects").click(function(){
    $("#one").hide();
    $("#three").hide();
    $("#five").hide();
    $("#six").hide(); 
    $("#projects").css({"background-color": "#153871", "color": "white"});
    $("#All").css({"background-color": "#ede9e9", "color":"black"});
  })
  $("#All").click(function(){
    $("#one").show();
    $("#three").show();
    $("#five").show();
    $("#six").show(); 
    $("#All").css({"background-color": "#153871", "color": "white"});
    $("#projects").css({"background-color": "#ede9e9", "color":"black"});
  })
  
</script>

  <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</body>

  </html>