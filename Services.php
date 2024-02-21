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

    <div class=" service-img">
        <h2>Services</h2>
    </div>

    <div class="container web-about">
        <p>Our company offers a wide range of application services to help businesses improve their productivity,
            efficiency, and user experience. We help the businesses in achieving their digital goals. Our team of expert
            developers and designers can create custom applications tailored to your business needs that meet our
            client’s unique business needs. We are dedicated to providing the best IT solutions to our clients. Our
            services are both user-friendly and reasonably priced. We use the latest technologies and programming
            languages to ensure that your client’s websites and applications are user-friendly, responsive, and secure.
            Here are some of the application services we offer: Web Development, App Development, Search Engine
            Optimization, and Web Design.
        </p>
    </div>



    <div class="main-cards">

        <div class="card" data-aos="flip-left">
            <img src="./img/web-devlopment.jpg" alt="Card Image">
            <div class="card-content">
                <h2 class="card-title">Web Development</h2>
                <p class="card-description">A website or web application is made through a process called web
                    development.
                    It involves the development of the website or web application's front-end (client-side) and
                    back-end (server-side). We provide complete web development services
                    to assist companies in creating an online.</p>
                <div class="explor-btn"><button class="btn" id="read-more">Explore more</button></div>
            </div>
        </div>

        <div class="card" data-aos="flip-down">
            <img src="./img/app-devlopment.jpg" alt="Card Image">
            <div class="card-content">
                <h3 class="card-title">Mobile App Development</h3>
                <p class="card-description">App development can be a valuable investment
                    for businesses looking to improve customers engagement and to reach new markets. We
                    develop Android and IOS applications for our clients, startups, and enterprises. Depending on
                    your business needs, our experienced.</p>
                <div class="explor-btn"><button class="btn">Explore more</button></div>
            </div>
        </div>

        <div class="card" data-aos="flip-right">
            <img src="./img/software-devlopment.jpg" alt="Card Image">
            <div class="card-content">
                <h3 class="card-title">Software Development</h3>
                <p class="card-description">Software development is a multi-stage process that starts with planning and
                    ends with maintenance. The aim of software development is to design and produce software
                    applications that are user-friendly, dependable, and efficient. The process of planning,
                    building, testing.
                </p>
                <div class="explor-btn"><button class="btn ">Explore more</button></div>
            </div>
        </div>

    </div>

    <div class="main-cards">

        <div class="card" data-aos="flip-left">
            <img src="./img/Software-testing.jpg" alt="Card Image">
            <div class="card-content">
                <h2 class="card-title">Software Testing</h2>
                <p class="card-description">In the fast-paced world of software development, ensuring the quality and
                    reliability of software products is crucial for success. This is where Obicule Technologies
                    steps in as a leading provider of exceptional software testing services. With a commitment to
                    excellence and a team of highly skilled professionals, Obicule Technologies offers a unique and
                    comprehensive testing solution that can revolutionize your.</p>
                <div class="explor-btn"><button class="btn ">Explore more</button></div>
            </div>
        </div>

        <div class="card" data-aos="flip-down">
            <img src="./img/web-design.jpg" alt="Card Image">
            <div class="card-content">
                <h3 class="card-title">Web Design</h3>
                <p class="card-description">When we create a website design for your company, we focus on creating an
                    attractive and user-friendly website that effectively communicates company's brand and message.
                    It reflects the company's commitment to sustainability, outdoor adventure. Web design is the
                    process of creating a visually appealing and user-friendly experience for a website or web
                    application.</p>
                <div class="explor-btn"><button class="btn ">Explore more</button></div>
            </div>
        </div>

        <div class="card" data-aos="flip-right">
            <img src="./img/digital-marketing.jpg" alt="Card Image">
            <div class="card-content">
                <h3 class="card-title">Digital Marketing</h3>
                <p class="card-description">We provide web design services that assist businesses in enhancing their
                    online
                    performance through digital marketing, numerous techniques. Your web audience can be found,
                    expanded, and converted with the help of our devoted team of internet marketers. It relates to
                    recent technologies like Social Media Optimisation, Search Engine Optimisation and Social Media
                    Marketing.</p>
                <div class="explor-btn"><button class="btn ">Explore more</button></div>
            </div>
        </div>

    </div>


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

    <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</body>

    </html>