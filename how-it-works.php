<?php
$pageTitle = "How it Works - My Proparty";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/navbar.php"; ?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title dark-background d-flex align-items-center" style="background-image: url(assets/img/app-img/DV1.jpg); background-size: cover; background-position: center;">
    <div class="container text-center position-relative" data-aos="fade-down">
      <h1 class="fw-bold">How It Works</h1>
      <p class="lead">A simple, secure, and transparent process to protect your property.</p>
      <nav class="breadcrumbs d-flex justify-content-center">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">How It Works</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- How It Works Section -->
  <section id="how-it-works-section" class="how-it-works section py-5">
    <div class="container" data-aos="fade-up">
      <div class="section-title text-center mb-5">
        <h2 class="fw-bold">Step-by-Step Process</h2>
        <p class="text-muted">Follow these easy steps to register, verify, and secure your valuable items.</p>
      </div>

      <div class="row g-4">
        <!-- Step 1 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="step-card h-100 p-4 text-center shadow-sm rounded-4">
            <div class="step-icon mb-3">
              <i class="bi bi-person-plus-fill fs-1 text-primary"></i>
            </div>
            <h4 class="fw-bold">1. Register</h4>
            <p>Sign up and create your secure account.</p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="step-card h-100 p-4 text-center shadow-sm rounded-4">
            <div class="step-icon mb-3">
              <i class="bi bi-box-seam fs-1 text-success"></i>
            </div>
            <h4 class="fw-bold">2. Add Items</h4>
            <p>Enter details about your item — serial number, brand, model, etc.</p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="step-card h-100 p-4 text-center shadow-sm rounded-4">
            <div class="step-icon mb-3">
              <i class="bi bi-shield-check fs-1 text-warning"></i>
            </div>
            <h4 class="fw-bold">3. Verify Ownership</h4>
            <p>Upload purchase proof or validation documents.</p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="step-card h-100 p-4 text-center shadow-sm rounded-4">
            <div class="step-icon mb-3">
              <i class="bi bi-qr-code fs-1 text-danger"></i>
            </div>
            <h4 class="fw-bold">4. Generate Certificate</h4>
            <p>Receive a unique QR-coded certificate linked to your item.</p>
          </div>
        </div>

        <!-- Step 5 -->
        <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="500">
          <div class="step-card h-100 p-4 text-center shadow-sm rounded-4">
            <div class="step-icon mb-3">
              <i class="bi bi-shield-lock-fill fs-1 text-info"></i>
            </div>
            <h4 class="fw-bold">5. Stay Protected</h4>
            <p>Use the certificate to prove ownership, deter theft, or check item authenticity.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include "includes/footer.php"; ?>
