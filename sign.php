<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DiskonKuyy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <footer id="footer">
      <div class="container">
          <img src="assets/img/logo.png" width="100" height="100">
      </div>
    </footer>

	<section id="book-a-table" class="book-a-table">
    <div class="container">
	  
	<div class="section-title">
        <h2>Silahkan Sign Up  <span>Sebagai Admin</span></h2>
        <p>Buat akun baru Anda!</p>
    </div>
	
	<form action="ceksignup.php" method="POST">
		<div class="row">
		<div class="mb-3">
		  <label class="form-label">Username</label>
		  <input type="text" class="form-control" name="username" placeholder="isi Username" required>
		</div>

		<div class="mb-3">
		  <label class="form-label">Email</label>
		  <input type="email" class="form-control" name="email" placeholder="isi Email" required>
		</div>

		<div class="mb-3">
		  <label class="form-label">Password</label>
		  <input type="password" class="form-control" name="password" placeholder="isi Password" required>
		</div>

		<div class="text-center">
		  <input type="submit" value="Sign Up" class="book-a-table-btn scrollto">
		</div>
		</div>
	</form>
	</section>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>DiskonKuyy</h3>
      <p>Membantu para promo hunter untuk menemukan promo disetiap kuliner yang diinginkan.</p>
      <h3> - </h3>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>J0303201083</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Diva Ariani
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>