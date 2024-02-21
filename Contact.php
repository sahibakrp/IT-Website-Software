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

  <div class=" background  Contact-img">
    <h2>Contact Us</h2>
  </div>


  <section class="contact-us">
    <div class="row">
      <div class="contact-col">
        <form action="" id="frmContactus" method="post">
          <input type="text" name="name" placeholder="Enter Your Name" required
            onkeydown="return/[a-z A-Z]/i.test(event.key)">
          <input type="email" name="email" placeholder="Enter Email Address" required>
          <input type="tel" name="phone" placeholder="Enter Your Phone No" required
            onkeypress="return validationNumber(event)">
          <textarea type="text" name="subject" rows="8" placeholder="Enter Message" required></textarea>
          <button type="submit" name="submit" id="form-submit" class="red-btn submit-btn">Send Message</button>
          <span style="color: green;" id="msg"></span>
        </form>
      </div>
      <div class="contact-col">
        <div>
          <i class="fa-solid fa-house"></i>
          <span>
            <h5>XYZ Road, ABC Building</h5>
            <p>Noida, Delhi/NCR, IN </p>
          </span>
        </div>
        <div>
          <i class="fa-solid fa-phone"></i>
          <span>
            <h5>+91 0123456789</h5>
            <p>Monday to Saturday, 10AM to 6PM </p>
          </span>
        </div>
        <div>
          <i class="fa-solid fa-envelope"></i>
          <span>
            <h5>info@abcd.com</h5>
            <p>Email us your query</p>
          </span>
        </div>
      </div>

    </div>
  </section>

  <section class="location">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2470975137176!2d77.37867867425808!3d28.62235548454501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceff687f7cbff%3A0x211604eae1d0f86d!2sh%2C%20150%2C%20Sector%2063%20Rd%2C%20A%20Block%2C%20Sector%2062%2C%20Noida%2C%20Uttar%20Pradesh%20201307!5e0!3m2!1sen!2sin!4v1695146995135!5m2!1sen!2sin"
      width="600" height="380" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
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

  <!-- ***************footer end here****************** -->

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    AOS.init({
      offset: 200, duration: 1500,
    });
  </script>
  <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
  <script>// code for contact us page

    jQuery('#frmContactus').on('submit', function (e) {

      jQuery('#msg').html('');
      jQuery('#form-submit').html('Please wait');
      jQuery('#form-submit').attr('disabled', true);
      jQuery.ajax({
        url: 'save.php',
        type: 'post',
        data: jQuery('#frmContactus').serialize(),
        success: function (result) {
          jQuery('#msg').html(result);

          jQuery('#form-submit').html('Submit');
          jQuery('#form-submit').attr('disabled', false);
          jQuery('#frmContactus')[0].reset();
        }
      });
      e.preventDefault();
    });</script>
 <script>
  function validateNumber(e) {
    const pattern = /^[0-9]$/;
    return pattern.test(e.key);
  }
</script>
</body>

</html>