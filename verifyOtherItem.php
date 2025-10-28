<?php
$pageTitle = "Verify Other Item - My Proparty";
?>
<?php ob_start(); ?>
<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/navbar.php"; ?>

<!-- Slim Page Title -->
<div class="page-title dark-background" style="background-image: url(assets/img/app-img/DV1.jpg);">
  <div class="overlay"></div>
  <div class="container position-relative text-center">
    <h2>Verify Other Items</h2>
    <p>Enter Unique Item ID for Verification</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="verify">Verify</a></li>
        <li class="current">Verify Other Items</li>
      </ol>
    </nav>
  </div>
</div>
<!-- End Page Title -->

<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center pb-4">
      <div class="col-md-8 text-center ftco-animate" data-aos="fade-up">
        <h3 class="mb-3">Other Item Verification</h3>
        <span class="subheading">Enter Item Unique ID</span>
        <br><br>

        <!-- Verification Form -->
        <form action="" method="post" enctype="multipart/form-data" class="shadow-sm p-4 rounded bg-white" data-aos="fade-up" data-aos-delay="100">
          <div class="row g-2">
            <div class="col-md-8">
              <input type="text" name="uid" 
                     class="form-control" 
                     placeholder="Please enter UID correctly"
                     value="<?php echo isset($_POST['uid']) ? $_POST['uid'] : '' ?>" 
                     autocomplete="off" required>
            </div>
            <div class="col-md-4 d-grid">
              <button class="btn btn-success" type="submit" name="submit">
                <i class="fa fa-search"></i> Verify Item
              </button>
            </div>
          </div>
        </form>

        <div class="mt-4" data-aos="fade-up" data-aos-delay="200">
          <?php 
          if(isset($_POST['submit'])){
              $uid = mysqli_real_escape_string($connection,$_POST['uid']);
              $errors = array();
          
              $p = "SELECT unique_identification_number FROM other WHERE unique_identification_number = '$uid'";
              $pp = mysqli_query($connection,$p);
              $npp = mysqli_num_rows($pp);
          
              if($npp <= 0){
                $errors['f'] = "UID ($uid) not found in the database. Please carefully enter a correct Unique ID.";
              }
          
              if(count($errors)==0 && !empty ($uid)){
                $query = "SELECT * FROM other WHERE unique_identification_number = '$uid' && reg_status = 'Approved'";
                $change_other_query = mysqli_query($connection, $query);
          
                while($row = mysqli_fetch_assoc($change_other_query)){
                  $item_name = $row['item_name'];
                  $item_model = $row['item_model'];
                  $item_status = $row['item_status'];
          
                  if(mysqli_num_rows($change_other_query) > 0){
                    echo "<div class='alert alert-info'><i class='fa fa-check-circle'></i> <strong>Item with UID ({$uid}) found!</strong></div>";
                    
                    if($item_status == 'Legit'){
                      echo "<div class='alert alert-success'><i class='fa fa-check'></i> Item Name/Model: <strong>{$item_name} {$item_model}</strong><br>Status: <strong>{$item_status}</strong></div>";	
                    } else if($item_status == 'Stolen'){
                      echo "<div class='alert alert-danger'><i class='fa fa-times-circle'></i> Item Name/Model: <strong>{$item_name} {$item_model}</strong><br>Status: <strong>{$item_status}</strong></div>";
                    } else {
                      echo "<div class='alert alert-warning'><i class='fa fa-info-circle'></i> Item Name/Model: <strong>{$item_name} {$item_model}</strong><br>Status: <strong>{$item_status}</strong></div>"; 
                    }
                  }
                }
              }
          }
          ?>

          <?php if(isset($errors['f'])): ?>
            <div class="alert alert-danger mt-3" data-aos="fade-in"><i class="fa fa-exclamation-triangle"></i> <?php echo $errors['f']; ?></div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>

<!-- Custom CSS -->
<style>
  .slim-title {
    padding: 40px 0;
    background-size: cover;
    background-position: center;
    position: relative;
  }
  .slim-title .overlay {
    position: absolute;
    top:0; left:0;
    width:100%; height:100%;
    background: rgba(0,0,0,0.5);
  }
  .slim-title h2, 
  .slim-title p, 
  .slim-title .breadcrumbs {
    position: relative;
    z-index: 2;
    color: #fff;
  }
  .form-control {
    border-radius: 8px;
    padding: 12px;
  }
  .btn-success {
    transition: all 0.3s ease;
  }
  .btn-success:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
  }
</style>
