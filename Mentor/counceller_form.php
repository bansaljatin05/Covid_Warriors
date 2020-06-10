<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PECOVID-Student Counseling</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="material/pec_seal.png" rel="icon">
  <!--link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<style>
  /* Changes by Aseem*/
.counceller-info img{
  width:20%;
  display: inline;
  border: black 2px solid;
  float: left;
}
.counceller-info h2{
 /* text-align: left;*/
    background: #5fcf80;
    padding: 30px ;
    color: #fff;
    margin: 1%;
}
.c-description {
  display: inline-block;
  width: 70%;
    padding: 2%;
    margin-top: auto;
}
.c-description p{
  /*text-align: left;*/
    background: #5fcf80;
    padding: 30px ;
    color: #fff;
    display: inline-block;
}
.col-lg-8{
  background:lavenderblush;
}
.col-lg-8 .php-email-form{
  background: aliceblue;
 margin-block-end: 3%;
  margin-block-start: 3%;
}
<?php
  $mysqli = new mysqli("localhost", "root", "", "covwarrior");
  
$name = $sid = $subject = $branch = $teacher = $email = $doubt = " ";

if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $Name = $mysqli->real_escape_string($_POST["name"]);
      $Email = $mysqli->real_escape_string($_POST["email"]);
      $Sid = $mysqli->real_escape_string($_POST["SID"]);
      $Description = $mysqli->real_escape_string($_POST["description"]);
      $Branch = $mysqli->real_escape_string($_POST["branch"]);
      $Phone = $mysqli->real_escape_string($_POST["Phone"]);


      
      $sql = "INSERT INTO councelling (Name, Email, Sid, Branch, Phone, Description) " 
          . "VALUES ('$Name', '$Email', '$Sid', '$Branch', '$Phone', '$Description')";
      
      $result = mysqli_query($mysqli,$sql);
      
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $sid = test_input($_POST["SID"]);
      $description = test_input($_POST["description"]);
      $branch = test_input($_POST["branch"]);
      $phone = test_input($_POST["Phone"]);

      if(!$result) {
        echo "Some error";
      }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
  }

?>

</style>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">PECOVID</a></h1>

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="trainers.php">COVID-19</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="pricing.php">Academics</a></li>
          <li class="active"><a href="counceller_form.php" >Counseling</a></li>
          <li><a href="contact.php">Contact</a></li>
          
        </ul>
      </nav><!-- .nav-menu -->

     


    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Counseling at PEC</h2>
        <p>As a part of the Institute's initiative to help all students to cope with
           the mental stress and anxiety during these times of pandemic and uncertainty, 
          counseling session is being conducted on Stress and Anxiety management. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <!--div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div-->
      <style>
       .counceller-info{
         margin: 1px;
       }
      </style>
      <div class="container" data-aos="fade-up">
      <div class="counceller-info">
        <h2>About the Counselor</h2>
        <img src="material/neelam_1.jpeg">
        <div class="c-description">
        <h3>Mrs. Neelam Vats</h3>
        <p>She is a Mental Health professional Counselor at Punjab Engineering College, Chandigarh. 
          She is always ready to help you all to cope with the mental stress and anxiety during these times of pandemic and 
          uncertainty. For the past two decades, she has been associated with various government organizations and NGOs and has worked for the empowerment of women, especially in rural areas, child development among others.
        </p>
        </div>
      </div>
      <h5><style>
        h5{
          margin:1%;
          text-align: left;
        }
      </style>Please fill the form below for getting counseling time-slot.</h5>
        <div class="row mt-5">

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="number" name="Phone" class="form-control" id="Phone" placeholder="Your Number" data-rule="minlen:10"  data-msg="Please enter a valid number" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                    <input type="number" name="SID" class="form-control" id="SID" placeholder="Your SID" data-rule="minlen:8"  data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="branch" id="branch" placeholder="Your Branch" data-rule="minlen:2" data-msg="Please enter a valid branch" />
                    <div class="validate"></div>
                  </div>  
              </div>
              <div class="form-row">
                 <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="description" id="description" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Problem Description"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your Application has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Submit Application</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Mentor</h3>
            <p>
              Punjab Engineering College <br>
              Chandigharh, 160012<br>
              India <br><br>
              <strong>Phone:</strong> +919501421773<br>
              <strong>Email:</strong> aseemmanglap@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="trainers.php">COVID-19</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="events.php">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pricing.php">Academics</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="counceller_form.php">Counseling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <a href="index.html">PECOVID</a>
        <p>© All Rights reserved by PEC ACM</p>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/pecacm" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/pecacm/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/pecacm" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>