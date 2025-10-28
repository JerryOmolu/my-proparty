<?php
$pageTitle = "Contact Us - My Proparty";
?>
<?php ob_start(); ?>
<?php include "includes/db.php"; ?>

<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/navbar.php"; ?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title dark-background" style="background-image: url(images/bg3.jpg);">
    <div class="container position-relative">
      <h1>Contact</h1>
      <p>We’re here to answer your questions. Reach out and let’s connect!</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index">Home</a></li>
          <li class="current">Contact</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <!-- Contact Info Boxes -->
      <div class="row gy-4 mb-5">
        
        <!-- Address -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-info-box hover-card red-theme">
            <div class="icon-box">
              <i class="bi bi-geo-alt"></i>
            </div>
            <div class="info-content">
              <h4>Our Address</h4>
              <p>3rd Floor, Plot 388 Constitution Avenue, Central Business District, Abuja 900103, Federal Capital Territory</p>
            </div>
          </div>
        </div>

        <!-- Email -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="contact-info-box hover-card blue-theme">
            <div class="icon-box">
              <i class="bi bi-envelope"></i>
            </div>
            <div class="info-content">
              <h4>Email Address</h4>
              <p>info@myproparty.com.ng</p>
              <p>support@myproparty.com.ng</p>
            </div>
          </div>
        </div>

        <!-- Hours -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="contact-info-box hover-card green-theme">
            <div class="icon-box">
              <i class="bi bi-headset"></i>
            </div>
            <div class="info-content">
              <h4>Hours of Operation</h4>
              <p>Sunday–Friday: 9 AM - 6 PM</p>
              <p>Saturday: 9 AM - 4 PM</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Google Maps -->
    <div class="map-section" data-aos="fade-up" data-aos-delay="200">
      <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=3rd%20Floor,%20Plot%20388%20Constitution%20Avenue,%20Central%20Business%20District,%20Abuja%20900103,%20Federal%20Capital%20Territory+(My%20Proparty)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.mapsdirections.info/it/calcola-la-popolazione-su-una-mappa/">densità di popolazione Italia mappa</a></iframe>
    </div>

    <!-- Contact Form -->
    <div class="container form-container-overlap">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
        <div class="col-lg-10">
          <div class="contact-form-wrapper shadow-lg p-4 rounded bg-white">
            <h2 class="text-center mb-4">Get in Touch</h2>

			  <?php 

if(isset($_POST['submit'])){
       
        $to = "support@myproparty.com.ng";
        $subject = wordwrap($_POST['subject'],70);
        $body = $_POST['body'];
        $header = "From: " . $_POST['email'];
        mail($to,$subject,$body);
}

?>
			  
			  
            <form action="" method="post" class="php-email-form">
              <div class="row g-3">

<!--
                <div class="col-md-6">
                  <div class="form-group input-with-icon">
                    <i class="bi bi-person"></i>
                    <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                  </div>
                </div>
-->

                <div class="col-md-6">
                  <div class="form-group input-with-icon">
                    <i class="bi bi-envelope"></i>
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group input-with-icon">
                    <i class="bi bi-chat-left-text"></i>
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group input-with-icon textarea-icon">
                    <i class="bi bi-chat-dots"></i>
                    <textarea class="form-control" name="body" placeholder="Write Message..." rows="6" required></textarea>
                  </div>
                </div>

                <div class="col-12 text-center">
                  <button type="submit" name="submit" class="btn btn-primary btn-submit">SEND MESSAGE</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

  </section><!-- /Contact Section -->

</main>

<?php include "includes/footer.php"; ?>

<!-- Custom Styles -->
<style>
  .contact-info-box {
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    text-align: center;
    transition: all 0.3s ease-in-out;
  }

  .contact-info-box .icon-box {
    font-size: 2rem;
    margin-bottom: 15px;
  }

  .hover-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15);
  }

  .red-theme .icon-box i { color: #e53935; }
  .red-theme:hover { box-shadow: 0 8px 20px rgba(229,57,53,0.4); }

  .blue-theme .icon-box i { color: #1e88e5; }
  .blue-theme:hover { box-shadow: 0 8px 20px rgba(30,136,229,0.4); }

  .green-theme .icon-box i { color: #43a047; }
  .green-theme:hover { box-shadow: 0 8px 20px rgba(67,160,71,0.4); }

  .input-with-icon {
    position: relative;
  }

  .input-with-icon i {
    position: absolute;
    top: 50%;
    left: 12px;
    transform: translateY(-50%);
    color: #888;
  }

  .input-with-icon input,
  .input-with-icon textarea {
    padding-left: 40px;
    border-radius: 8px;
  }

  .btn-submit {
    background: linear-gradient(90deg, #1e88e5, #43a047);
    border: none;
    padding: 12px 30px;
    border-radius: 30px;
    transition: all 0.3s ease-in-out;
    font-weight: 600;
  }

  .btn-submit:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 20px rgba(30,136,229,0.4);
  }
</style>
