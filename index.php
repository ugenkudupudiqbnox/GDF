<?php include('includes/inc_config.php');

// session_start();
// include_once ('includes/inc_nocache.php'); 
// include_once ('includes/inc_usr_functions.php');

$siteKey = '6Lce05QrAAAAAJcVcNEJ-hvUE4LilOaRSWIsgBH0';
$secretKey = '6Lce05QrAAAAAHYKLmQ6T_Lgm4cZcC3pkrYa2MQH';
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Global DeepTech Forum </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="font/flaticon_gdf.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img id="site-logo" src="assets/img/logo.svg" alt="">
        
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active"><i class="flaticon-home"></i><br></a></li>

          <li><a href="#our-mission">Our Mission</a></li>
          <li><a href="#what-we-do">What We Do</a></li>
          <li><a href="#engagement-model">Engagement Model</a></li>
          <li><a href="#executive-leadership">Advisory Board</a></li>
          <li><a href="#recent-posts">Driving the Next Era</a></li>
          <li><a href="#where-we-operate">Where We Operate</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle close d-xl-none bi bi-list "></i>
      </nav>

      <!-- <a class="btn-getstarted flex-md-shrink-0" href="index.php#about">Get Started</a> -->

    </div>
  </header>



  
  <main class="main">

    <!-- Hero Section -->
<section id="hero" class="hero section">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
           <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
           <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <!-- Add more buttons for additional slides -->
    </div>

    <!-- Slides -->
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="hero-slide ban" >
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-7 d-flex flex-column justify-content-center ban-content">
                <h1>Quantum Computing</h1>
                <p class="col-white">Next Computing revolution</p>
                <div class="">
                  <a href="quantum.php" class="btn-get-started">Know More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="hero-slide ban2" >
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-7 d-flex flex-column justify-content-center ban-content">
                <h1>Semiconductors </h1>
                <p class="col-white">Powering the Brains of the Future</p>
                <div class="">
                  <a href="semiconductors" class="btn-get-started">Know More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
         <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="hero-slide ban3" >
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-7 d-flex flex-column justify-content-center ban-content">
                <h1>Cybersecurity</h1>
                <p class="col-white">The Next Frontier in Digital Defense </p>
                <div class="">
                  <a href="cybersecurity.php" class="btn-get-started">Know More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          <!-- Slide 4-->
      <div class="carousel-item">
        <div class="hero-slide ban4" >
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-7 d-flex flex-column justify-content-center ban-content">
                <h1>AI</h1>
                <p class="col-white">Smarter Decisions, Faster Outcomes</p>
                <div class="">
                  <a href="#what-we-do" class="btn-get-started">Know More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

         <!-- Slide 5 -->
      <div class="carousel-item">
        <div class="hero-slide ban5" >
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-7 d-flex flex-column justify-content-center ban-content">
                <h1>Robotics </h1>
                <p class="col-white">Where Innovation Meets Automation</p>
                <div class="">
                  <a href="#what-we-do" class="btn-get-started">Know More <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
</section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="our-mission" class="about section">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
               <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <!-- <h2>Services</h2> -->
        <p>Our Mission<br></p>
      </div><!-- End Section Title -->
          
              <!-- <p>
                To catalyse global innovation in DeepTech <b>(Quantum, AGI, Cybersecurity, Semiconductors, and Robotics)</b> by creating a collaborative platform that bridges the gap between <b>Researchers, Key Opinion Leaders, Government, Policy Makers, Corporates, Startups, Venture Capital, and Global Thought Leaders.</b>
              </p> -->
              <p>To catalyse global innovation in DeepTech covering quantum technologies, artificial general intelligence, cybersecurity, semiconductors and robotics by creating a collaborative platform that bridges the gap between researchers, key opinion leaders, government, policy makers, corporates, startups, venture capital and global thought leaders.</p>
              <div class="text-center text-lg-start">
                <!-- <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/our-mission.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- /About Section -->


     <!-- Services Section -->
    <section id="what-we-do" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <!-- <h2>Services</h2> -->
        <p>What We Do<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="flaticon flaticon-project-management"></i>
              <h3>Corporate Innovation <br>& Product Engineering</h3>
              <ul>
            <li>Connect <b>enterprises</b> with <b>startups</b> to build next-gen products through low-cost product engineering teams.</li>
            <li>Enable rapid co-development and prototyping for deep tech solutions.</li>
           
          </ul>
              <!-- <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="flaticon flaticon-capital-venture"></i>
              <h3>Access to Venture Capital</h3>
              <ul>
            <li>Facilitate VC introductions for startups through global investor networks.</li>
            <li>Showcase curated startups through demo days, pitch sessions, and exclusive briefings.</li>
           
          </ul>
              <!-- <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="flaticon flaticon-thought-leadership"></i>
              <h3>Thought Leadership <br> & Content</h3>
              <ul>
            <li>Host TOP100 Global CIOs for fireside chats and interviews.</li>
            <li>Regular webinars, blogs, panels, and podcasts featuring global experts.</li>
            <li>Hackathons and innovation challenges to crowdsource breakthrough ideas.</li>
           
          </ul>
              <!-- <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <i class="flaticon flaticon-calendar"></i>
              <h3>Global Events & Visibility</h3>
              <ul>
            <li>Organize innovation summits and showcases across our global hubs.</li>
            <li>Provide a platform for startups and thought leaders to promote and sell their innovations.</li>
        
          </ul>
              <!-- <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item item-indigo position-relative">
              <i class="flaticon flaticon-private-key"></i>
              <!-- <i class="bi bi-calendar4-week icon"></i> -->
              <h3>Market Access & Strategic Launches</h3>
               <ul>
            <li>Support startups and enterprises in launching products and concepts across global markets.</li>
            <li>Enable access to government programs, regulatory bodies, and international networks for faster go-to-market and public-private collaboration.</li>
          </ul>
              <!-- <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item item-pink position-relative center">
              <!-- <i class="bi bi-chat-square-text icon"></i> -->
              <h3 class="">Next</h3>
              <!-- <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div> 
          
          <!-- End Service Item

        </div>

      </div>

    </section>
    <-- Services Section -->

    <!-- Values Section -->
    <section id="engagement-model" class="values section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <!-- <h2>Our Values</h2> -->
        <p>Engagement Model<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/corporate.jpg" class="img-fluid" alt="">
              <h3>With Corporates</h3>
               <ul>
            <li>Innovation-as-a-Service: Co-create POCs with vetted startups</li>
            <li>Sponsor hackathons, challenges, and summits</li>
            <li>Access to curated startup talent and deal flow</li>
          </ul>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="assets/img/startup.jpg" class="img-fluid" alt="">
              <h3>With Startups</h3>
              <ul>
            <li>Global exposure through CIO talks, blogs, events</li>
            <li>Connect with VCs and enterprise customers</li>
            <li>Technical and design support for product launch</li>
            <li>Sell via our thought leader marketplace</li>
          </ul>
              
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="assets/img/ecosystem.jpg" class="img-fluid" alt="">
              <h3>With the Ecosystem</h3>
              <ul>
            <li>Partner with governments, academia, and incubators</li>
            <li>Collaborate on public policy and regulatory inputs</li>
            <li>Serve as a neutral global platform for deep tech collaboration</li>
          </ul>
              
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>

    </section><!-- /Values Section -->

   

<!-- Alt Features Section -->
    <section id="executive-leadership" class="alt-features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        
        <p>Governing Board, Advisory Board & Executive Leadership
<br></p>

      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-7 d-flex order-2 order-xl-1" data-aos="fade-up" data-aos-delay="200">

            <div class="row align-self-center gy-5">
<h4>A world-class team representing the entire DeepTech Ecosystem:</h4>
              <div class="col-md-6 icon-box">
                <i class="flaticon flaticon-infrastructure"></i>
                <div>
                  <h4>Industry:</h4>
                  <p>CXOs from tech giants, global enterprises, and unicorn startups</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="flaticon flaticon-government"></i>
                <div>
                  <h4>Government:</h4>
                  <p>Policy influencers, international trade envoys, and innovation mission leaders</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="flaticon flaticon-research"></i>
                <div>
                  <h4>Academia & Research:</h4>
                  <p>Leading scientists, researchers, and institutional heads</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="flaticon flaticon-sponsor"></i>
                <div>
                  <h4>Investors:</h4>
                  <p>Partners from top-tier VC firms and global investment networks</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="flaticon flaticon-leadership"></i>
                <div>
                  <h4>Thought Leaders:</h4>
                  <p>Globally recognized experts shaping the future of DeepTech</p>
                </div>
              </div><!-- End Feature Item -->

              <!-- <div class="col-md-6 icon-box">
                <i class="bi bi-patch-check"></i>
                <div>
                  <h4>Explicabo consectetur</h4>
                  <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                </div>
              </div> -->
              
              <!-- End Feature Item -->

            </div>

          </div>

          <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/governing-board.jpg" class="img-fluid" alt="">
          </div>

        </div>

      </div>

    </section><!-- /Alt Features Section -->

 <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <!-- <h2>Recent Posts</h2> -->
        <p>Driving the Next Era</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                <!-- <span class="post-date">December 12</span> -->
              </div>

              <div class="post-content d-flex flex-column">

               <div class="">

                 <h4 class="post-title">Quantum Computing
</h4>

                <span class="sub-title">Next Computing revolution</span>
               </div>

                <div class="meta d-flex align-items-center">
                <p class="para">Quantum computing harnesses the principles of quantum mechanics aiming to solve complex problems. 
Quantum computers use qubits, which can exist in a superposition of both 0 and 1 simultaneously. 

                </p>
                </div>

                <hr>

                <a href="quantum.php" class="readmore stretched-link text-center"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                <!-- <span class="post-date">July 17</span> -->
              </div>

              <div class="post-content d-flex flex-column">



                    <div class="">

                 <h4 class="post-title">Semiconductors 
</h4>

                <span class="sub-title">Powering the Brains of the Future</span>
               </div>

               <div class="meta d-flex align-items-center " >
                  <p class="para">The semiconductor industry is the backbone of every deep tech revolution—from AI and Quantum Computing to Robotics and Secure Infrastructure. At GDF, we are building a global ecosystem to accelerate semiconductor innovation ...
                </p>
                </div>


               

                <hr>

                <a href="semiconductors.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

          <div class="col-xl-4 col-md-6" >
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                <!-- <span class="post-date">September 05</span> -->
              </div>

              <div class="post-content d-flex flex-column">

      <div class="">

                 <h4 class="post-title">Cybersecurity 
</h4>

                <span class="sub-title">The Next Frontier in Digital Defense  </span>
               </div>
                <div class="meta d-flex align-items-center">
                   <p class="para">Cybersecurity leverages cutting-edge technologies and strategies to protect systems, networks, and data from evolving threats. With the rise of AI-driven attacks, quantum-resistant cryptography, and sophisticated ...  
                </p>
                </div>

                <hr>

                <a href="cybersecurity.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->
  <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-4.png" class="img-fluid" alt="">
                <!-- <span class="post-date">December 12</span> -->
              </div>

              <div class="post-content d-flex flex-column">

               <div class="">

                 <h4 class="post-title">AI

</h4>

                <span class="sub-title">Smarter Decisions, Faster Outcomes</span>
               </div>

                <div class="meta d-flex align-items-center">
                <p class="para">Artificial Intelligence (AI) is revolutionizing how machines interact with the world.
It enables systems to learn from data, adapt, and make intelligent decisions.



                </p>
                </div>

                <hr>

                <a href="#" class="readmore stretched-link text-center"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-5.png" class="img-fluid" alt="">
                <!-- <span class="post-date">July 17</span> -->
              </div>

              <div class="post-content d-flex flex-column">



                    <div class="">

                 <h4 class="post-title">Robotics 
</h4>

                <span class="sub-title">Where Innovation Meets Automation</span>
               </div>

               <div class="meta d-flex align-items-center " >
                  <p class="para">Robotics blends engineering, AI, and automation to create intelligent machines.
Modern robots can perceive, learn, and interact with their environment.
                </p>
                </div>


               

                <hr>

                <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->
        </div>

      </div>

    </section><!-- /Recent Posts Section -->


    <!-- Features Section -->
    <section id="where-we-operate" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <!-- <h2>Features</h2> -->
        <p>Where We Operate<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/where-we-operate.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-xl-6 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                 <i class="bi bi-shield-check"></i>
                  <h3>We are present in all Global DeepTech Hotspots. Headquartered in Silicon Valley, with Regional Chapters in India, Israel, Germany, Taiwan, South Korea, and Japan but members present across globe.</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-shield-check"></i>
                  <h3>DeepTech Forum Americas (USA)</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-shield-check"></i>
                  <h3>DeepTech Forum Europe (Germany)</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-shield-check"></i>
                  <h3>DeepTech Forum South Asia (Japan, Taiwan, South Korea)</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-shield-check"></i>
                  <h3>DeepTech Forum APAC (India)</h3>
                </div>
              </div><!-- End Feature Item -->

              

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Features Section -->


<!-- contact us -->
 <section id="contact" class="contact section">
     <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <!-- <h2>Contact</h2> -->
        <p>Contact Us</p>
      </div><!-- End Section Title -->
	<div class="container contact-style-two anim-5-all" id="contact-section">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 contact-info-wrap">
				<!-- .section-title -->
				<div class="section-ti reach-us">
					<span>For Any Querry</span>
					<h2><span class="">Reach Us</span></h2>
				</div><!-- /.section-title -->
				<div class="contact-info">
					<ul>
						<!-- <li>A108 Adam Street New York, NY 535022</li> -->
                  
						<li class="phn"get ><strong>Phone:</strong> <span><a href="tel:+919840411782" class="col-white">+91 9840411782</a></span></li>
						<li><strong>Email:</strong> <span><a href="mailto:reachus@thegdf.org
" target="_blank" class="col-white">reachus@thegdf.org
</a></span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 right-side-overlay-full">
				<!-- .contact-form-wrap -->
				<div class="contact-form-wrap">
					<h2><span class="form-h2 uppercase">We’re Just a Message Away</span></h2>
					<form method="post" name="contact_form" id="contact_form"
                                 onsubmit="return performCheck('contact_form', contact_rules,'inline');"
                                 action="contact_validate.php" enctype="multipart/form-data" class="">
                                 <div class="col-md-12">
                                    <div class="row">
                                         <div class="col-md-12">
                                       <div class="form-group">
                                          <input class="form-control" id="name" name="name" placeholder="Name*"
                                             type="text" required>
                                          <span id="errorsDiv_name" style="color:red"></span>
                                       </div>
                                        </div>


                                        <div class="col-md-12">
                                       <div class="form-group">
                                          <input class="form-control" id="phone" name="phone" placeholder="Phone*"
                                             type="text" required>
                                          <span id="errorsDiv_phone" style="color:red"></span>
                                       </div>
                                        </div>


                                         <div class="col-md-12">
                                             
                                       <div class="form-group">
                                          <input class="form-control" id="email" name="email" placeholder="Email*"
                                             type="email" required>
                                          <span id="errorsDiv_email" style="color:red"></span>
                                       </div>
                                        </div>
                                         
                                        
                                      
                                        
                                       
                                        
                                         
                                        
                                        
                                         <div class="col-md-12">
                                       <div class="form-group comments">
                                          <textarea class="form-control" id="comments" name="comments"
                                             placeholder="Your Message"></textarea>
                                             <span id="errorsDiv_comments" style="color:red"></span>
                                       </div>
                                        </div>
                                       <!--  <div class="form-check">
                                          <input id="form_botcheck" name="form_botcheck" class="form-control"
                                             type="hidden" value="">
                                          <label class="form-check-label" for="flexCheckDefault">
                                             <input type="checkbox" id="" name="" value="">
                                          </label>
                                       </div> -->
                                        <?php /*?><div class="col-md-12">
                                       <div class="form-btn form-group mb-4">
                                          <div class="w-100">
                                             <!-- reCAPTCHA widget -->
                                             <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                                          </div>
                                       </div>
                                        </div><?php */?>
                                    
                                       <div class="col-md-12 text-left">
                                         
                                             <button type="submit" class="btn btn-black" name="submit" id="submit">
                                               Submit <i class="fa fa-paper-plane"></i>
                                             </button>
                                              
                                              <button type="reset" class="btn btn-black ml-3" name="submit" id="submit">
                                               Reset 
                                             </button>
                                          
                                       </div>
                                       <!-- Alert Message -->
                                       <div class="col-md-12 alert-notification">
                                          <div id="message" class="alert-msg"></div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
				
				</div><!-- /.contact-form-wrap -->
			</div>
		</div>
	</div>
</section>

  </main>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
         
          <div class="col-lg-6">
             <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <!-- <h2>Contact</h2> -->
        <p>Let’s Co-Create the Future</p>
      </div><!-- End Section Title -->
            <p>Be part of a living, breathing global innovation network—where corporates get solutions, startups get launched, and thought leaders build influence.</p>
            <form method="post"  name="newsletter_form" id="newsletter_form"
      onsubmit="return performCheck('newsletter_form', newsletter_rules, 'inline');"
                                 action="newsletter.php" enctype="multipart/form-data" class="">

  <div class="newsletter-form">
    <input type="email" name="email" required>
    <input type="submit" value="Start Secure Collaboration">
  </div>
  <!-- <div class="loading">Loading</div>
  <div class="error-message"></div>
  <div class="sent-message">We will reach you soon. Thank you!</div> -->
</form>

          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6 footer-about">
          <a href="index.php" class="d-flex align-items-center">
            <!-- <span class="sitename">FlexStart</span> -->
             <img id="site-logo" src="assets/img/logo.svg" alt="">
          </a>
          <div class="footer-contact pt-3">
            <!-- <p>A108 Adam Street</p>
            <p>New York, NY 535022</p> -->
            <p class="mt-3"><strong>Phone:</strong> <span><a href="tel:+919840411782">+91 9840411782</a></span></p>
            <p><strong>Email:</strong> <span><a href="mailto:reachus@thegdf.org
" target="_blank" >reachus@thegdf.org
</a></span></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#our-mission">Our Mission</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#engagement-model">Engagement Model</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#executive-leadership">Advisory Board</a></li>
             <li><i class="bi bi-chevron-right"></i> <a href="#recent-posts">Driving the Next Era</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#where-we-operate">Where We Operate</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#what-we-do">Corporate Innovation & Product Engineering</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#what-we-do">Access to Venture Capital</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#what-we-do">Thought Leadership & Content</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#what-we-do">Global Events & Visibility</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#what-we-do">Market Access & Strategic Launches</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12">
          <h4>Follow Us</h4>
          <p>Connect with us on social platforms to stay updated on innovation, cybersecurity insights, and global initiatives.</p>
          <div class="social-links d-flex">
            <a href="https://x.com/ForumGDF
" target="_blank"><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/groups/137157/ " target="_blank"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Global DeepTech Forum</strong><span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="includes/yav.js" type="text/javascript"></script>
   <script src="includes/yav-config.js" type="text/javascript"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
  const form = document.querySelector('#your-form-id');
const input = document.querySelector('#your-input-id');
const messageBox = document.querySelector('#message-box');

form.addEventListener('submit', function (e) {
    e.preventDefault();

    fetch('forms/newsletter.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `email=${encodeURIComponent(input.value)}`
    })
    .then(res => res.json())
    .then(data => {
        messageBox.textContent = data.message;
        messageBox.className = data.status === 'success' ? 'success-message' : 'error-message';
    })
    .catch(() => {
        messageBox.textContent = "Something went wrong.";
        messageBox.className = 'error-message';
    });
});


  </script>
  
  

   <script>
	var contact_rules = new Array();
	contact_rules[0] = 'name|required|Enter Your Name';
	contact_rules[1] = 'phone|required|Enter Phone Number';
	contact_rules[2] = 'email|required|Enter Your E-mail';
	contact_rules[3] = 'email|email|Enter your E-mail';
	contact_rules[4] = 'comments|required|Enter Comments';
   </script>
   <script>
      AOS.init({
         offset: 100,
         duration: 600,
         easing: 'ease-in-out-back',
         delay: 0,
         mirror: true,
         disabled: false
      });
   </script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>



</body>

</html>