
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Test</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="icon" href="favicon_io/favicon.ico">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
	

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceSchool
  * Template URL: https://bootstrapmade.com/nice-school-bootstrap-education-template/
  * Updated: May 10 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->	

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

	
</head>

<body class="index-page">
<!-- ? Preloader Start -->
<div id="preloader-active">
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="preloader-inner position-relative text-center">
      
      <!-- Animated Circle -->
      <div class="preloader-circle"></div>
      
      <!-- Logo in the center -->
      <div class="preloader-img pere-text">
        <img src="images/logo/3d.png" alt="My Proparty Logo" width="120" height="auto">
        <p class="loading-text">Loading...</p>
      </div>
      
    </div>
  </div>
</div>
<!-- Preloader End -->

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index" class="logo d-flex align-items-center">
      <img src="images/logo/3dicon.png" alt="My Proparty Logo" height="100rem" width="30rem">
      <h1 class="sitename">My Proparty</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li class="dropdown">
          <a href="#about"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="about-us">About Us</a></li>
            <li><a href="how-it-works">How It Works</a></li>
            <li><a href="features">Features</a></li>
          </ul>
        </li>
        <li><a href="verify">Verify Item</a></li>
        <li><a href="Individual/SignIn">Register Item</a></li>
        <li><a href="contact">Contact</a></li>
        <li class="dropdown">
          <a href="#"><span>Account</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="Individual/SignIn">Login</a></li>
            <li><a href="Individual/Register">Sign Up</a></li>
          </ul>
        </li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header>

<!-- ✅ Add Bootstrap Bundle JS before closing body -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- ✅ Toggle Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const mobileToggle = document.querySelector('.mobile-nav-toggle');
  const navMenu = document.querySelector('#navmenu');

  if (mobileToggle) {
    mobileToggle.addEventListener('click', function () {
      navMenu.classList.toggle('active');
      this.classList.toggle('bi-x');   // Show "X" icon
      this.classList.toggle('bi-list'); // Show hamburger
    });
  }
});
</script>

<!-- ✅ Mobile Menu CSS -->
<style>
/* Hide menu on mobile by default */
#navmenu {
  display: flex;
}

@media (max-width: 991px) {
  #navmenu {
    display: none;
    flex-direction: column;
    background: #fff;
    position: absolute;
    top: 70px; /* adjust to header height */
    right: 15px;
    left: 15px;
    padding: 1rem;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    z-index: 99;
  }

  #navmenu.active {
    display: block;
  }

  #navmenu ul {
    flex-direction: column;
    gap: 10px;
  }

  #navmenu ul li a {
    padding: 8px 0;
    display: block;
  }
}
</style>

 <main class="main">

 <!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <div class="hero-container">
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="video-background">
      <source src="assets/img/vid1.mp4" type="video/mp4">
    </video>
    <div class="overlay"></div>

    <div class="container">
      <div class="row align-items-center">
        
        <!-- Left Content -->
        <div class="col-lg-7" data-aos="zoom-out" data-aos-delay="100">
          <div class="hero-content">
            <h1>Register. Verify. <span class="highlight">Stay Secure.</span></h1>
            <p class="tagline">Prevent buying stolen items. Secure your phones, laptops, and vehicles with <strong>MY PROPARTY</strong>.</p>
            
            <div class="cta-buttons">
              <a href="Individual/SignIn" class="btn btn-primary me-3">
                <i class="bi bi-pencil-square me-1"></i> Register Your Item
              </a>
              <a href="verify" class="btn btn-outline-light">
                <i class="bi bi-search me-1"></i> Verify an Item
              </a>
            </div>
          </div>
        </div>

        <!-- Right Stats Card -->
        <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
          <div class="stats-card shadow-lg">
            <div class="stats-header">
              <h3>Why Choose <span class="highlight">MY PROPARTY</span></h3>
              <div class="decoration-line"></div>
            </div>
            <div class="stats-grid">
              <div class="stat-item">
                <div class="stat-icon bg-green">
                  <i class="bi bi-shield-check"></i>
                </div>
                <div class="stat-content">
                  <h4>100%</h4>
                  <p>Secure Information Handling</p>
                </div>
              </div>
              <div class="stat-item">
                <div class="stat-icon bg-blue">
                  <i class="bi bi-search"></i>
                </div>
                <div class="stat-content">
                  <h4>Instant</h4>
                  <p>Item Verification</p>
                </div>
              </div>
              <div class="stat-item">
                <div class="stat-icon bg-yellow">
                  <i class="bi bi-box-arrow-in-down"></i>
                </div>
                <div class="stat-content">
                  <h4>Free</h4>
                  <p>Item Registration</p>
                </div>
              </div>
              <div class="stat-item">
                <div class="stat-icon bg-red">
                  <i class="bi bi-people"></i>
                </div>
                <div class="stat-content">
                  <h4>+10K</h4>
                  <p>Registered Users</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Event Ticker -->
  <div class="event-ticker">
    <div class="container">
      <div class="row gy-4 text-center">

        <div class="col-md-6 col-xl-4 col-12 ticker-item">
          <span class="date">JUNE 10</span>
          <span class="title">Free Item Registration Week</span>
          <a href="#" class="btn-register">Register Now</a>
        </div>

        <div class="col-md-6 col-xl-4 col-12 ticker-item">
          <span class="date">JUNE 15</span>
          <span class="title">Public Awareness Campaign</span>
          <a href="#" class="btn-register">Learn More</a>
        </div>

        <div class="col-md-6 col-xl-4 col-12 ticker-item">
          <span class="date">COMING SOON</span>
          <span class="title">Mobile App Launch</span>
          <a href="#" class="btn-register disabled">Stay Tuned</a>
        </div>

      </div>
    </div>
  </div>

</section>
<!-- /Hero Section -->

<style>
/* Background video & overlay */
.hero-container {
  position: relative;
  overflow: hidden;
  min-height: 100vh;
  display: flex;
  align-items: center;
}

.video-background {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  object-fit: cover;
  z-index: -2;
}

.hero-container .overlay {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.6);
  z-index: -1;
}

/* Content */
.hero-content h1 {
  color: #fff;
  font-size: 3rem;
  font-weight: 700;
}
.hero-content .highlight { color: #34af4d; }
.hero-content .tagline {
  margin: 15px 0 25px;
  font-size: 1.2rem;
  color: #e0e0e0;
}
.cta-buttons .btn-primary {
  background: #34af4d;
  border: none;
}
.cta-buttons .btn-primary:hover {
  background: #2e9440;
}
.cta-buttons .btn-outline-light:hover {
  background: #2e9440;
  border-color: #2e9440;
}

/* Stats Card */
.stats-card {
  background: #fff;
  padding: 25px;
  border-radius: 15px;
}
.stats-header h3 {
  font-weight: 600;
  margin-bottom: 15px;
}
.decoration-line {
  width: 60px; height: 3px;
  background: #34af4d;
  margin-bottom: 20px;
}
.stats-grid {
  display: grid;
  gap: 20px;
}
.stat-item {
  display: flex;
  align-items: center;
  gap: 15px;
}
.stat-icon {
  width: 50px; height: 50px;
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  color: #fff; font-size: 22px;
}
.stat-icon.bg-green { background: #34af4d; }
.stat-icon.bg-blue { background: #1c5f9c; }
.stat-icon.bg-yellow { background: #fbc21b; color: #000; }
.stat-icon.bg-red { background: #c05471; }

/* Event ticker */
.event-ticker {
  background: #000;
  color: #fff;
  padding: 20px 0;
  margin-top: 40px;
}
.ticker-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  background: rgba(255,255,255,0.05);
  border-radius: 10px;
  padding: 15px;
  transition: transform 0.3s;
}
.ticker-item:hover {
  transform: translateY(-5px);
}
.ticker-item .date {
  font-size: 0.9rem;
  font-weight: 600;
  color: #fbc21b;
}
.ticker-item .title {
  margin: 5px 0;
  font-size: 1rem;
  font-weight: 500;
}
.btn-register {
  background: #34af4d;
  color: #fff;
  padding: 6px 14px;
  border-radius: 5px;
  font-size: 0.85rem;
  margin-top: 10px;
  transition: background 0.3s;
}
.btn-register:hover { background: #2e9440; }
.btn-register.disabled {
  background: #666;
  cursor: not-allowed;
}
</style>


  </main>

 <footer id="footer" class="footer position-relative dark-background">

  <div class="container footer-top">
    <div class="row gy-4">

      <!-- Footer About -->
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center">
          <span class="sitename">MY PROPARTY</span>
        </a>
        <div class="footer-contact pt-3">
          <p><strong>Office Address:</strong></p>
          <p>3rd Floor, Plot 388 Constitution Avenue, Central Business District, Abuja 900103, Federal Capital Territory</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+2347083242888</span></p>
          <p><strong>Email:</strong> <span>info@myproparty.com.ng</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href="#"><i class="bi bi-twitter-x"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- Useful Links -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Our Services</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>

      <!-- Our Services -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><a href="#verify">Item Verification</a></li>
          <li><a href="#register">Register Item</a></li>
          <li><a href="#report">Report Stolen Item</a></li>
          <li><a href="#track">Track Item Status</a></li>
          <li><a href="#recover">Recovery Assistance</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Support</h4>
        <ul>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">User Guide</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Support Center</a></li>
        </ul>
      </div>

      <!-- Community -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Community</h4>
        <ul>
          <li><a href="#">Success Stories</a></li>
          <li><a href="#">Partners</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Volunteer</a></li>
          <li><a href="#">Donate</a></li>
        </ul>
      </div>
    </div>
  </div>

	<div class="container copyright text-center mt-4" style="font-size:1px; opacity:0;">
    <p>© 2025 <span id="year"></span> <strong class="px-1 sitename">My Proparty</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">Tranverse</a>
    </div>
  </div>
	
  <div class="container copyright text-center mt-4">
    <p>© 2025 <span id="year"></span> <strong class="px-1 sitename">My Proparty</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      Designed by <a href="https://tranverse.com.ng/" target="_blank">Tranverse</a>
    </div>
  </div>
</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


 <!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

<script src="js/sweetalert.js"></script>
<?php 
if(isset($_SESSION['status']) && $_SESSION['status'] != '')
{
	?>
	<script>
		swal({
			title: "<?php echo $_SESSION['head']; ?>",
			icon: "<?php echo $_SESSION['status_code']; ?>",
			text: "<?php echo $_SESSION['status']; ?>",
			button: "OK",
		}).then(function() {
			window.location = "index.php";
		});
	</script>
	<?php
	unset($_SESSION['status']);
}
?>

<!-- Other Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/jquery.animateNumber.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="assets/js/google-map.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/lga.js"></script>
<script src="assets/js/lga.min.js"></script>

<!-- WhatsApp Widget -->
<script>
  var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?85417';
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  s.src = url;
  var options = {
    "enabled":true,
    "chatButtonSetting":{
        "backgroundColor":"#28a745",
        "ctaText":"Chat Us",
        "borderRadius":"25",
        "marginLeft":"0",
        "marginBottom":"50",
        "marginRight":"50",
        "position":"right"
    },
    "brandSetting":{
        "brandName":"My Proparty",
        "brandSubTitle":"Protecting Your Valuable Assets, Keeping You Safe!",
        "brandImg":"images/3d Logo.jpeg",
        "welcomeText":"Welcome to My Proparty!\nHow may we help you?",
        "messageText":"Hello, I have a question about My Proparty!",
        "backgroundColor":"#28a745",
        "ctaText":"Start Chat",
        "borderRadius":"25",
        "autoShow":false,
        "phoneNumber":"2347083242888"
    }
  };
  s.onload = function() {
      CreateWhatsappChatWidget(options);
  };
  var x = document.getElementsByTagName('script')[0];
  x.parentNode.insertBefore(s, x);
</script>


<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>