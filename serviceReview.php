<?php
$pageTitle = "Service Review - My Proparty";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/topbar.php"; ?>    
<?php include "includes/navigation.php"; ?>
<?php include "includes/functions.php"; ?>

<section class="ftco-section testimony-section bg-light">
<!--    	<div class="overlay"></div>-->
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
            <h2>Service Review</h2>
<!--
            <hr>
            <span class="subheading" style="color:red;">Note: Please all reviews should be constructive and geared towards improvement in the delivery of our Services. Thank You </span>
-->
<!--            <hr>-->
            <br>
            
<form action="" method="post">     
		<div class="form-group">
		<label for="author"><b>Review by (Author):</b></label>
		<input type="text" class="form-control" name="author" style="border:solid 1px;" placeholder="Enter a Demo Name" required>
		</div>
		<div class="form-group">
		<label for="content"><b>Your Review Content:</b></label>
		<textarea name="content" class="form-control" rows="3" style="border:solid 1px;" placeholder="Enter review content" required></textarea>
		</div>
		<br>
		<button type="submit" name="create_review" class="btn btn-primary">Submit Review</button>
</form>
   <?php		  
if(isset($_POST['create_review'])){
    $review_author = mysqli_real_escape_string($connection,$_POST['author']);
    $review_content = mysqli_real_escape_string($connection,$_POST['content']);
		
    if(!empty ($review_author) && !empty ($review_content)){

   $query = "INSERT INTO review(review_author,review_content,review_date,review_status)VALUES('{$review_author}','{$review_content}',now(),'Unapproved')";
    
    $create_review = mysqli_query($connection, $query);
		
  if($create_review){
	  $_SESSION['head'] = "Thank You!";
	  $_SESSION['status'] = "Your review has been submmitted successfuly";
	  $_SESSION['status_code'] = "success";
  }
else{
	$_SESSION['head'] = "Error!";
	$_SESSION['status'] = "Something Went Wrong";
	  $_SESSION['status_code'] = "error";
	  header('Location:serviceReview.php');
}
			
    if(!$create_review){
        die('QUERY FAILED' . mysqli_error($connection));
    }  
  }else {
		 echo "<div class='alert alert-danger'><strong>Fields cannot be empty</strong> </div>";
	}
}               
            
?> 	
          	
           
          </div>
        </div>

      </div>
    </section>

<?php include "includes/footer.php";?>