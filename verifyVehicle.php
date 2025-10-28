<?php
$pageTitle = "Verify Vehicle - My Proparty";
?>
<?php ob_start(); ?>
<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/navbar.php"; ?>

<!-- Slim Page Title -->
<div class="page-title dark-background slim-title" style="background-image: url(assets/img/app-img/DV1.jpg);">
  <div class="container position-relative text-center">
    <h2><i class="fa fa-car"></i> Verify Vehicles</h2>
    <p class="mb-1">Vehicle Verification Arena</p>
    <nav class="breadcrumbs d-inline-flex gap-2">
      <ol>
        <li><a href="verify">Verify</a></li>
        <li class="current">Verify Vehicle</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Vehicle Verification Section -->
<section class="ftco-section testimony-section bg-light">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center pb-4 mb-3">
      <div class="col-md-8 text-center ftco-animate" data-aos="fade-up">
        <h2><i class="fa fa-id-card text-warning"></i> Vehicle Verification</h2>
        <span class="subheading">Enter Vehicle Chassis Number (17 Digits)</span>
        <br><br>

        <!-- Verification Form -->
        <form action="" method="post" enctype="multipart/form-data" data-aos="zoom-in">
          <div class="row g-2">
            <div class="col-md-8">
              <input type="text" name="chassis" class="form-control form-control-lg"
                placeholder="Enter Chassis Number correctly"
                value="<?php echo isset($_POST['chassis']) ? $_POST['chassis'] : '' ?>" 
                maxlength="17" autocomplete="off" required>
            </div>
            <div class="col-md-4">
              <button class="btn btn-warning btn-lg w-100" type="submit" name="submit">
                <i class="fa fa-search"></i> Verify Vehicle
              </button>
            </div>
          </div>
        </form>
        <br>

        <!-- PHP Logic for Verification -->
        <?php 
        if(isset($_POST['submit'])){
          $chassis = mysqli_real_escape_string($connection,$_POST['chassis']);
          $errors = array();

          $p = "SELECT chassis_number FROM vehicle WHERE chassis_number = '$chassis'";
          $pp = mysqli_query($connection,$p);
          $np = strlen($chassis);
          $npp = mysqli_num_rows($pp);

          if($np < 17){
            $errors['n'] = "❌ Chassis number ($chassis) cannot be less than 17 digits. Please enter a complete number.";
          }

          if($npp <= 0){
            $errors['f'] = "⚠️ Chassis number ($chassis) not found. Please double-check and try again.";
          }

          if(count($errors)==0 && !empty ($chassis)){
            $query = "SELECT * FROM vehicle WHERE chassis_number = '$chassis' && reg_status = 'Approved'";
            $verify_vehicle_query = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($verify_vehicle_query)){
              $vehicle_make = $row['vehicle_make'];
              $vehicle_model = $row['vehicle_model'];
              $item_status = $row['item_status'];

              if(mysqli_num_rows($verify_vehicle_query) > 0){
                echo "<div class='alert alert-warning mt-3' data-aos='fade-right'>
                        <strong><i class='fa fa-check-circle'></i> Vehicle with Chassis Number ({$chassis}) found!</strong>
                      </div>";

                if($item_status == 'Legit'){
                  echo "<div class='alert alert-primary' data-aos='fade-up'>
                          Vehicle: <strong>{$vehicle_make} {$vehicle_model}</strong><br>
                          Status: <strong class='text-success'>{$item_status}</strong>
                        </div>";
                } else if($item_status == 'Stolen'){
                  echo "<div class='alert alert-primary' data-aos='fade-up'>
                          Vehicle: <strong>{$vehicle_make} {$vehicle_model}</strong><br>
                          Status: <strong class='text-danger'>{$item_status}</strong>
                        </div>";
                } else {
                  echo "<div class='alert alert-primary' data-aos='fade-up'>
                          Vehicle: <strong>{$vehicle_make} {$vehicle_model}</strong><br>
                          Status: <strong class='text-info'>{$item_status}</strong>
                        </div>";
                }
              }
            }
          }
        }
        ?>

        <!-- Error Messages -->
        <?php if(isset($errors['n'])): ?>
          <div class="alert alert-danger mt-2" data-aos="fade-left"><?php echo $errors['n']; ?></div>
        <?php endif; ?>
        <?php if(isset($errors['f'])): ?>
          <div class="alert alert-danger mt-2" data-aos="fade-left"><?php echo $errors['f']; ?></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>

<!-- Custom CSS -->
<style>
  .slim-title {
    padding: 35px 0;
    background-size: cover;
    background-position: center;
  }
  .slim-title h2 {
    font-size: 1.8rem;
    font-weight: 600;
    margin-bottom: 6px;
  }
  .slim-title p {
    font-size: 0.95rem;
    margin-bottom: 8px;
  }
</style>
