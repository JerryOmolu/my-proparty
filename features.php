<?php
$pageTitle = "Features - My Proparty";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/navbar.php"; ?>

<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url(assets/img/app-img/DV1.jpg);">
  <div class="container position-relative">
    <h1>Features</h1>
    <p style="text-align: center;">Explore the key features that make My Proparty your trusted platform for asset registration and verification.</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li class="current">Features</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<section id="about" class="about section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row mission-vision-row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="value-card h-100" style="background-color: #89AC46;">
          <center>
            <div class="card-icon">
              <i class="bi bi-shield-lock-fill"></i>
            </div>
            <h3>Ownership Verification</h3>
          </center>
          <p>Securely register and confirm the ownership of your items to protect against theft or fraud.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="value-card h-100" style="background-color: #DDF6D2;">
          <center>
            <div class="card-icon">
              <i class="bi bi-file-earmark-text-fill"></i>
            </div>
            <h3>Digital Certificates</h3>
          </center>
          <p>Get official digital ownership certificates for your registered assets.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="value-card h-100" style="background-color: #89AC46;">
          <center>
            <div class="card-icon">
              <i class="bi bi-search"></i>
            </div>
            <h3>Real-Time Search</h3>
          </center>
          <p>Search items in the system to verify their status before purchasing or accepting transfers.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="value-card h-100" style="background-color: #DDF6D2;">
          <center>
            <div class="card-icon">
              <i class="bi bi-lock-fill"></i>
            </div>
            <h3>Data Privacy</h3>
          </center>
          <p>We ensure your data is encrypted and only accessible to authorized parties.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="value-card h-100" style="background-color: #89AC46;">
          <center>
            <div class="card-icon">
              <i class="bi bi-person-check-fill"></i>
            </div>
            <h3>Instant Validation</h3>
          </center>
          <p>Instant validation for buyers, law enforcement, and organizations needing item authentication.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="value-card h-100" style="background-color: #DDF6D2;">
          <center>
            <div class="card-icon">
              <i class="bi bi-phone-fill"></i>
            </div>
            <h3>Mobile Friendly</h3>
          </center>
          <p>Access and manage your registered items easily on any mobile device.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include "includes/footer.php"; ?>

<!-- Custom Hover CSS -->
<style>
  .value-card {
    transition: all 0.3s ease-in-out;
    border-radius: 12px;
    padding: 20px;
    color: #222;
  }

  .value-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  }

  .card-icon i {
    font-size: 3rem;
    color: #fff;
    transition: all 0.3s ease-in-out;
    padding: 15px;
    border-radius: 50%;
    display: inline-block;
  }

  /* Green glow for icons */
  .value-card:hover .card-icon i {
    color: #2E7D32;
    text-shadow: 0 0 12px rgba(46, 125, 50, 0.8);
  }

  /* Light background cards should use dark icons */
  .value-card[style*="DDF6D2"] .card-icon i {
    color: #2E7D32;
  }
</style>
