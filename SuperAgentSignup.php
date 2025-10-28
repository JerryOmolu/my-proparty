<?php
$pageTitle = "Super Agent Signup - My Proparty";
?>
<?php ob_start(); ?>
<?php include "includes/db.php"; ?>

<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/navbar.php"; ?>

<div class="page-title dark-background" style="background-image: url(assets/img/app-img/DV1.jpg);">
  <div class="container position-relative">
    <h1>Partnership Sign Up</h1>
    <p style="text-align: center;">Super Agents</p>
  </div>
</div><!-- End Page Title -->

<section class="ftco-section bg-light py-5">
  <div class="container">
    <!-- Heading + Info -->
    <div class="row justify-content-center pb-4">
      <div class="col-md-8 text-center">
        <h2 class="text-success mb-3">Super Agent Sign Up Form</h2>
        <div class="alert alert-info text-start">
          <b>This is for the truly ambitious. Business Managers, Business Owners, Big Business Executives and anyone who can successfuly run a conglomerate of operations. </b>
          <p class="mb-1">Super agents are in charge of areas within a state, or even an entire state itself, managing agents and operators and having up to one thousand and more operators working under them. </p>
          <a href="Information%20Guide.pdf" target="_blank" class="fw-bold text-primary">
            📘 Click here to read our Information Guide
          </a>
        </div>
      </div>
    </div>

    <!-- Form -->
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card shadow-lg border-0 rounded-4">
          <div class="card-body p-4">
			  
	<?php 


		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;

		require 'vendor/autoload.php';

		function sendemail_verify($fullname,$email,$verify_token){
		$mail = new PHPMailer(true);

		$mail->isSMTP(); 
		$mail->SMTPAuth   = true; 
		$mail->Host       = 'suntowin.com.ng'; 
		$mail->Username   = 'info@suntowin.com.ng';                     //SMTP username
		$mail->Password   = 'sundayetim123';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		$mail->Port       = 465; 
		$mail->setFrom('info@suntowin.com.ng', 'My Proparty');
		$mail->addAddress($email); 
		$mail->isHTML(true);
		$mail->Subject = 'Sign Up Confirmation Email from My Proparty';

		$email_template = "
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>My Proparty e-Confirmation</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #f4f4f4;
      font-family: Arial, sans-serif;
      color: #333;
    }
    .container {
      max-width: 600px;
      margin: 20px auto;
      background: #ffffff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .header {
      background: #28a745;
      padding: 25px;
      text-align: center;
    }
    .header h1 {
      margin: 0;
      font-size: 22px;
      font-weight: bold;
      color: #fff;
    }
    .body {
      padding: 30px 25px;
      text-align: center;
      line-height: 1.6;
    }
    .body h2 {
      color: #28a745;
      margin-top: 0;
    }
    .body p {
      font-size: 15px;
      margin: 15px 0;
    }
    .footer {
      background: #f9f9f9;
      text-align: center;
      padding: 15px;
      font-size: 12px;
      color: #777;
    }
  </style>
</head>
<body>
  <div class='container'>
    <!-- Header -->
    <div class='header'>
      <h1>My Proparty e-Confirmation</h1>
    </div>

    <!-- Body -->
    <div class='body'>
      <h2>Congratulations, $fullname!</h2>
      <p>You have successfully signed up with <b>My Proparty</b> as a Super Agent.</p>
      <p>Our team will reach out to you shortly via email or phone call with further directives.</p>
      <p>Thank you for choosing My Proparty!</p>
      <br>
      <p><strong>Cheers,</strong><br>My Proparty Team</p>
    </div>

    <!-- Footer -->
    <div class='footer'>
      <p>© ".date('Y')." My Proparty. All Rights Reserved.</p>
    </div>
  </div>
</body>
</html>
";
		$mail->Body    = $email_template;
		$mail->send();
		}
					
    if(isset($_POST['super_agent_signup'])){
        $title = mysqli_real_escape_string($connection,$_POST['title']);
        $fullname = mysqli_real_escape_string($connection,$_POST['fullname']);
        $gender = mysqli_real_escape_string($connection,$_POST['gender']);
        $date_of_birth = mysqli_real_escape_string($connection,$_POST['date_of_birth']);
        $phone = mysqli_real_escape_string($connection,$_POST['phone']);
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $state = mysqli_real_escape_string($connection,$_POST['state']);       
        $lga = mysqli_real_escape_string($connection,$_POST['lga']);       
        $state_of_interest =mysqli_real_escape_string($connection,$_POST['state_of_interest']); 
        $area = mysqli_real_escape_string($connection,$_POST['area']);       
        $city = mysqli_real_escape_string($connection,$_POST['city']);       
        $address = mysqli_real_escape_string($connection,$_POST['address']);       $verify_token = md5(rand());

		$errors = array();
        
        $a = "SELECT email FROM operator_signup WHERE email = '$email'LIMIT 1";
        $aa = mysqli_query($connection,$a);
        if(mysqli_num_rows($aa) > 0){
         $errors['a'] = "Email already exists for an Operator";   
        }
        
        $f = "SELECT phone FROM operator_signup WHERE phone = '$phone'LIMIT 1";
        $ff = mysqli_query($connection,$f);
        if(mysqli_num_rows($ff) > 0){
         $errors['f'] = "Phone Number already exists for an Operator";   
        }
        
        $a = "SELECT email FROM agent_signup WHERE email = '$email'LIMIT 1";
        $aa = mysqli_query($connection,$a);
        if(mysqli_num_rows($aa) > 0){
         $errors['m'] = "Email already exists for an Agent";   
        }
        
        $f = "SELECT phone FROM agent_signup WHERE phone = '$phone'LIMIT 1";
        $ff = mysqli_query($connection,$f);
        if(mysqli_num_rows($ff) > 0){
         $errors['t'] = "Phone Number already exists for an Agent";   
        }
    
        $e = "SELECT email FROM super_agent_signup	WHERE email = '$email' LIMIT 1";
        $ee = mysqli_query($connection,$e);
    
        if(empty($email)){
            $errors['e'] = "Email Cannot be Empty, Please Enter email address";
        }else if(mysqli_num_rows($ee) > 0){
            $errors['e'] = "Email already exists for another User";
        }
		
		$p = "SELECT phone FROM super_agent_signup WHERE phone = '$phone' LIMIT 1";
        $pp = mysqli_query($connection,$p);
    
        if(empty($phone)){
            $errors['p'] = "Phone Number Cannot be Empty, Please Enter a Phone Number";
        }else if(mysqli_num_rows($pp) > 0){
            $errors['p'] = "Phone Number Already Exists";
        }
						
		
		if(count($errors)==0 && !empty ($title) && !empty ($fullname) && !empty ($gender) && !empty ($date_of_birth) && !empty ($phone) && !empty ($email) && !empty ($state) && !empty ($lga) && !empty ($state_of_interest) && !empty ($area) && !empty ($city) && !empty ($address)){

	$query = "INSERT INTO super_agent_signup (title,fullname,gender,date_of_birth,phone,email,state,lga,state_of_interest,area,city,address,signup_date,verify_token)VALUES('{$title}','{$fullname}','{$gender}','{$date_of_birth}','{$phone}','{$email}','{$state}','{$lga}','{$state_of_interest}','{$area}','{$city}','{$address}',now(),'{$verify_token}')";
                        
    $operator_signup = mysqli_query($connection, $query);
	
		if($operator_signup){
			
			sendemail_verify("$fullname","$email","$verify_token");
			
            echo "<div class='alert alert-success'>
  <span class='closebtn'>×</span>  
  <strong>Thank You!</strong> Registration as Super Agent is Successful!
</div>";
		}
     
                    }
					}
                ?>  	  
			  
			  
  <form action="" enctype="multipart/form-data" class="row align-items-center justify-content-center" method="post">
  <div class="col-md-4 form-group">
      <label for="title"><b>Title</b></label>
      <select name='title' id='' class='form-control' value="<?php echo isset($_POST['title']) ? $_POST['title'] : '' ?>" required>
                            <option value=''>--Your Title--</option>
                            <option value='Mr'>Mr.</option>
                            <option value='Mrs'>Mrs.</option>
                            <option value='Miss'>Miss.</option>
                            <option value='Mr &amp; Mrs'>Mr. &amp; Mrs.</option>
                        </select>
    </div>  
     <div class="col-md-8 form-group">
      <label for="Your Name"><b>Your Name</b></label>
      <input type="text" name="fullname" placeholder="Your Full Name" id="fullname" class="form-control" value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : '' ?>" autocomplete="off" required>
    </div> 
    <div class="col-md-6 form-group">
      <label for="gender"><b>Gender</b></label>
      <select name='gender' id='' class='form-control' required>
                            <option value=''>--Select Gender--</option>
                            <option value='Male'>Male</option>
                            <option value='Female'>Female</option>
                        </select>
    </div>  
     <div class="col-md-6 form-group">
      <label for="birth"><b>Date of Birth</b></label>
      <input type='date' name='date_of_birth' class='form-control' value="<?php echo isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '' ?>" required>
    </div>
    <div class="col-md-6 form-group">
      <label for="phone"><b>Phone Number</b></label>
      <input type='text' name='phone' class='form-control' placeholder="Your Phone Number" autocomplete="off" maxlength="11" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>" required>
    <b><p class="text-danger"><?php if(isset($errors['p']))echo $errors['p']; ?></p></b>
    <b><p class="text-danger"><?php if(isset($errors['f']))echo $errors['f']; ?></p></b>
    <b><p class="text-danger"><?php if(isset($errors['t']))echo $errors['t']; ?></p></b>
    </div>
    <div class="col-md-6 form-group">
      <label for="email"><b>Email Address</b></label>
      <input type='email' name='email' class='form-control' placeholder="Your Email" autocomplete="off" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
    <b><p class="text-danger"><?php if(isset($errors['e']))echo $errors['e']; ?></p></b>
    <b><p class="text-danger"><?php if(isset($errors['a']))echo $errors['a']; ?></p></b>
    <b><p class="text-danger"><?php if(isset($errors['m']))echo $errors['m']; ?></p></b>
    </div>
    <div class="col-md-6 form-group">
      <label for="State"><b>State of Origin</b></label>
      <select onchange='toggleLGA(this);' name='state' id='state' class='form-control' value="<?php echo isset($_POST['state']) ? $_POST['state'] : '' ?>" required>
                            <option value='' selected='selected'>-Select State-</option>
                            <option value='Abia'>Abia</option>
                            <option value='Adamawa'>Adamawa</option>
                            <option value='AkwaIbom'>AkwaIbom</option>
                            <option value='Anambra'>Anambra</option>
                            <option value='Bauchi'>Bauchi</option>
                            <option value='Bayelsa'>Bayelsa</option>
                            <option value='Benue'>Benue</option>
                            <option value='Borno'>Borno</option>
                            <option value='Cross River'>Cross River</option>
                            <option value='Delta'>Delta</option>
                            <option value='Ebonyi'>Ebonyi</option>
                            <option value='Edo'>Edo</option>
                            <option value='Ekiti'>Ekiti</option>
                            <option value='Enugu'>Enugu</option>
                            <option value='FCT'>FCT</option>
                            <option value='Gombe'>Gombe</option>
                            <option value='Imo'>Imo</option>
                            <option value='Jigawa'>Jigawa</option>
                            <option value='Kaduna'>Kaduna</option>
                            <option value='Kano'>Kano</option>
                            <option value='Katsina'>Katsina</option>
                            <option value='Kebbi'>Kebbi</option>
                            <option value='Kogi'>Kogi</option>
                            <option value='Kwara'>Kwara</option>
                            <option value='Lagos'>Lagos</option>
                            <option value='Nasarawa'>Nasarawa</option>
                            <option value='Niger'>Niger</option>
                            <option value='Ogun'>Ogun</option>
                            <option value='Ondo'>Ondo</option>
                            <option value='Osun'>Osun</option>
                            <option value='Oyo'>Oyo</option>
                            <option value='Plateau'>Plateau</option>
                            <option value='Rivers'>Rivers</option>
                            <option value='Sokoto'>Sokoto</option>
                            <option value='Taraba'>Taraba</option>
                            <option value='Yobe'>Yobe</option>
                            <option value='Zamfara'>Zamafara</option>
                        </select>
    </div>
    <div class="col-md-6 form-group">
      <label for="lga"><b>LG of Origin</b></label>
      <select name='lga' id='lga' class='form-control select-lga' value="<?php echo isset($_POST['lga']) ? $_POST['lga'] : '' ?>" required>
                        </select>
    </div>
    <div class="col-md-6 form-group">
      <label for="lga"><b>State of Interest</b></label>
      <select  name='state_of_interest' class='form-control' value="<?php echo isset($_POST['state']) ? $_POST['state'] : '' ?>" required>
                            <option value='' selected='selected'>-Select State of Interest-</option>
                            <option value='Abia'>Abia</option>
                            <option value='Adamawa'>Adamawa</option>
                            <option value='AkwaIbom'>AkwaIbom</option>
                            <option value='Anambra'>Anambra</option>
                            <option value='Bauchi'>Bauchi</option>
                            <option value='Bayelsa'>Bayelsa</option>
                            <option value='Benue'>Benue</option>
                            <option value='Borno'>Borno</option>
                            <option value='Cross River'>Cross River</option>
                            <option value='Delta'>Delta</option>
                            <option value='Ebonyi'>Ebonyi</option>
                            <option value='Edo'>Edo</option>
                            <option value='Ekiti'>Ekiti</option>
                            <option value='Enugu'>Enugu</option>
                            <option value='FCT'>FCT</option>
                            <option value='Gombe'>Gombe</option>
                            <option value='Imo'>Imo</option>
                            <option value='Jigawa'>Jigawa</option>
                            <option value='Kaduna'>Kaduna</option>
                            <option value='Kano'>Kano</option>
                            <option value='Katsina'>Katsina</option>
                            <option value='Kebbi'>Kebbi</option>
                            <option value='Kogi'>Kogi</option>
                            <option value='Kwara'>Kwara</option>
                            <option value='Lagos'>Lagos</option>
                            <option value='Nasarawa'>Nasarawa</option>
                            <option value='Niger'>Niger</option>
                            <option value='Ogun'>Ogun</option>
                            <option value='Ondo'>Ondo</option>
                            <option value='Osun'>Osun</option>
                            <option value='Oyo'>Oyo</option>
                            <option value='Plateau'>Plateau</option>
                            <option value='Rivers'>Rivers</option>
                            <option value='Sokoto'>Sokoto</option>
                            <option value='Taraba'>Taraba</option>
                            <option value='Yobe'>Yobe</option>
                            <option value='Zamfara'>Zamafara</option>
                        </select>
    </div>
      <div class="col-md-6 form-group">
      <label for="area"><b>Area/Zone of Interest</b></label>
      <input type='text' name='area' class='form-control' placeholder="Your Area/Zone of Interest" autocomplete="off" value="<?php echo isset($_POST['area']) ? $_POST['area'] : '' ?>" required>
    </div>
    <div class="col-md-6 form-group">
      <label for="city"><b>City</b></label>
      <input type='text' name='city' class='form-control' placeholder="Your Current City" autocomplete="off" value="<?php echo isset($_POST['city']) ? $_POST['city'] : '' ?>" required>
    </div>
    <div class="col-md-6 form-group">
      <label for="address"><b>Contact Address</b></label>
      <input type='text' name='address' class='form-control' placeholder="Your Contact Address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>" required>
    </div>
    <br>
    <br>
    <br>
    <hr>
     <div class="col-md-6 form-group">
        <button type='submit'  name='super_agent_signup' class='btn btn-block btn-primary'>
                      Submit
         </button></div>
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php include "includes/footer.php";?>