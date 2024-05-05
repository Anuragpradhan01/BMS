<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title;?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('public/lumia/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?= base_url('public/lumia/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
  <link href="<?= base_url('public/lumia/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('public/lumia/css/style.css');?>" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html">LOGO</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/login">Login</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to <span>Company Name</span></h1>
      <h2>Still paying for the bulk/mass eMailing services even though you are limited by their SMTP outbound traffic
        restrictions and limitations such as eMails per hour/day/month etc.?</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>What We Do</h2>
         
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="<?= base_url('public/lumia/img/about.jpg');?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>About Us</h3>
            <p>
              Here is the solution, Company Name, A bulk/mass eMailing portal with robust eMail server-cluster exclusive
            and dedicated for US Staffing/Recruiting Industry.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul>
            <div class="row icon-boxes">
              <div class="col-md-6">
                <i class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6 mt-4 mt-md-0">
                <i class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
    
        <div class="section-title">
          <h2>Services</h2>
          <p>SignUp for a 2 week unlimited free-trial.</p>
        </div>
    
        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Mass Emailing at Blazing Speed</a></h4>
              <p>The portal offers a built-in mass emailing mechanism with high speed. No outgoing email traffic limits are imposed.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Efficient Contact List Management</a></h4>
              <p>Users can create and manage contact lists within the portal. A double-optin process is in place, complying with the CAN-SPAM ACT.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Subscription Requests with Non-Chargeable Email Engines</a></h4>
              <p>Users can use non-chargeable email engines to send subscription requests. These engines are utilized to request network subscriptions to contact lists.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Exclusive and Private Contact Lists</a></h4>
              <p>Contact lists are private and exclusive to the user. They are continually growing through mass email campaigns within the portal.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">No Requirement for Own Contact Lists</a></h4>
              <p>Users are not required to have their own contact lists initially. Distribution of requirements and hot-lists can be done to the portal's extensive recruiting database.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Access to Segregated and Valid Recruiting Database</a></h4>
              <p>The portal provides access to a huge recruiting database, categorized by skill sets and consultant priorities. Users can target specific segments.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-check2"></i>
              <h4><a href="#">Active and Growing Recruiting Database</a></h4>
              <p>The recruiting database is actively maintained and offered as a free resource. It is constantly fueled and expanded by both the portal and its clientele.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-globe"></i>
              <h4><a href="#">Efficient Distribution of Requirements</a></h4>
              <p>Users can distribute their recruiting requirements and hot-lists to the extensive database. Potential resumes can be received promptly.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-list-check"></i>
              <h4><a href="#">Database Segmentation for Targeted Outreach</a></h4>
              <p>The database is segmented based on skill sets and consultant priorities, allowing for targeted and focused outreach.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-sliders"></i>
              <h4><a href="#">Subscription Management Features</a></h4>
              <p>Users can easily manage subscriptions, un-subscriptions/removals, and edit contacts within the portal.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-file-earmark-text"></i>
              <h4><a href="#">Compliance with CAN-SPAM ACT</a></h4>
              <p>The double-optin process adheres to the CAN-SPAM ACT, ensuring legal and ethical email practices.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-currency-dollar"></i>
              <h4><a href="#">Cost-Efficient Recruiting Solution</a></h4>
              <p>The recruiting database is offered as a non-chargeable resource, providing a cost-efficient solution for clientele.</p>
            </div>
          </div>
        </div>
    
      </div>
    </section><!-- End Services Section -->
    



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>codelone.com</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="#">codelone</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('public/lumia/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
 

  <!-- Template Main JS File -->
  <script src="<?= base_url('public/lumia/js/main.js');?>"></script>

</body>

</html>