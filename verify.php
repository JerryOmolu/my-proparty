<?php
$pageTitle = "Verify - My Proparty";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/navbar.php"; ?>

<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url(assets/img/app-img/DV1.jpg);">
  <div class="container position-relative">
    <h1>Verify Item</h1>
    <p style="text-align: center;">Item Verification Arena</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="index">Home</a></li>
        <li class="current">Verify Item</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<section class="ftco-section testimony-section bg-light">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-8 text-center">
        <h2 style="color:#2E7D32;">ITEM VERIFICATION ARENA</h2>
        <span class="subheading">Select an Item to Verify</span>
        <br><br>
        <div class="row g-4 justify-content-center">

          <!-- Phones/Tablets -->
          <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
            <a href="verifyMobilePhone" class="verify-card phone">
              <i class="fa fa-mobile fa-3x"></i>
              <h5>Phones / Tablets</h5>
            </a>
          </div>

          <!-- Vehicles -->
          <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
            <a href="verifyVehicle" class="verify-card vehicle">
              <i class="fa fa-car fa-3x"></i>
              <h5>Vehicles</h5>
            </a>
          </div>

          <!-- Other Items -->
          <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
            <a href="verifyOtherItem" class="verify-card other">
              <i class="fa fa-building fa-3x"></i>
              <h5>Other Items</h5>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>

<!-- Custom CSS -->
<style>
  .verify-card {
    display: block;
    text-align: center;
    padding: 30px 20px;
    border-radius: 15px;
    color: #fff;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  }

  /* Base backgrounds */
  .verify-card.phone { background: #2E7D32; }   /* Green */
  .verify-card.vehicle { background: #FF9800; } /* Orange */
  .verify-card.other { background: #C62828; }   /* Red */

  .verify-card i {
    display: block;
    margin-bottom: 12px;
    transition: all 0.3s ease-in-out;
  }

  .verify-card:hover {
    transform: translateY(-8px) scale(1.05);
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
  }

  /* Glow effects */
  .verify-card.phone:hover i {
    color: #fff;
    text-shadow: 0 0 15px rgba(46, 125, 50, 0.9);
    transform: scale(1.2);
  }

  .verify-card.vehicle:hover i {
    color: #fff;
    text-shadow: 0 0 15px rgba(255, 152, 0, 0.9);
    transform: scale(1.2);
  }

  .verify-card.other:hover i {
    color: #fff;
    text-shadow: 0 0 15px rgba(198, 40, 40, 0.9);
    transform: scale(1.2);
  }

  .verify-card h5 {
    margin-top: 10px;
    font-size: 1.1rem;
  }
</style>

<!-- AOS Animation -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>
