<?php
$pageTitle = "Verify Phone - My Proparty";
?>
<?php ob_start(); ?>
<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/navbar.php"; ?>

<div class="page-title dark-background" style="background-image: url(assets/img/app-img/DV1.jpg);">
  <div class="container position-relative">
    <h1>Verify Mobile Phones/ Tablets</h1>
    <p style="text-align: center;">Phone/ Tablet Verification</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="verify">Verify</a></li>
        <li class="current">Verify Phone/Tablet</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<section class="ftco-section testimony-section bg-light">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-8">

        <!-- Section Title -->
        <div class="text-center mb-4">
          <h2 class="fw-bold text-success">Mobile Phone/Tablet Verification</h2>
          <span class="subheading">Enter Mobile Phone/Tablet IMEI</span>
        </div>

        <!-- Verification Card -->
        <div class="card shadow-lg border-0 rounded-4 p-4">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
              <span class="input-group-text bg-success text-white">
                <i class="bi bi-phone"></i>
              </span>
              <input type="text" 
                     name="imei" 
                     class="form-control" 
                     placeholder="Enter IMEI correctly" 
                     value="<?php echo isset($_POST['imei']) ? $_POST['imei'] : '' ?>" 
                     maxlength="15" 
                     autocomplete="off" 
                     required>
              <button class="btn btn-success" type="submit" name="submit">
                <i class="bi bi-search"></i> Verify
              </button>
            </div>
          </form>

          <?php 
          if(isset($_POST['submit'])){
              $imei = mysqli_real_escape_string($connection,$_POST['imei']);
              $errors = array();
          
              $p = "SELECT imei FROM phone WHERE imei = '$imei'";
              $pp = mysqli_query($connection,$p);
              $np = strlen($imei);
              $npp = mysqli_num_rows($pp);
          
              if($np < 15){
                  $errors['n'] = "IMEI ($imei) cannot be less than 15 digits. Kindly enter the complete IMEI.";
              }
          
              if($npp <= 0){
                  $errors['f'] = "IMEI ($imei) not found. Kindly enter a correct IMEI.";
              }
          
              if(count($errors)==0 && !empty ($imei)){
                  $query = "SELECT * FROM phone WHERE imei = $imei && reg_status = 'Approved'";
                  $verify_phone_query = mysqli_query($connection, $query);
                  while($row = mysqli_fetch_assoc($verify_phone_query)){
                      $phone_brand = $row['phone_brand'];
                      $model_name = $row['model_name'];
                      $item_status = $row['item_status'];

                      echo "<div class='alert alert-success mt-3' data-aos='fade-up'>
                              <strong>IMEI ({$imei}) exists!</strong> See details below:
                            </div>";

                      $statusColor = "blue";
                      if($item_status == 'Legit') $statusColor = "green";
                      if($item_status == 'Stolen') $statusColor = "red";

                      echo "<div class='card shadow-sm border-0 rounded-3 mt-3 p-3 text-center' 
                               style='border-left: 6px solid {$statusColor};' 
                               data-aos='fade-up'>
                              <h5><i class='bi bi-phone'></i> {$phone_brand} {$model_name}</h5>
                              <p>Status: <strong style='color:{$statusColor};'>{$item_status}</strong></p>
                            </div>";
                  }
              }
          }
          ?>

          <!-- Error Messages -->
          <?php if(!empty($errors['n'])): ?>
            <div class="alert alert-danger mt-3" data-aos="fade-up">
              <?php echo $errors['n']; ?>
            </div>
          <?php endif; ?>
          <?php if(!empty($errors['f'])): ?>
            <div class="alert alert-danger mt-3" data-aos="fade-up">
              <?php echo $errors['f']; ?>
            </div>
          <?php endif; ?>

        </div><!-- card -->

      </div>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>
