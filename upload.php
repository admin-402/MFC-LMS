<?php
if (!isset($_COOKIE['auth']) || $_COOKIE['auth'] !== 'true') {
  // Redirect the user to the sign-in page or display an error message
  header('Location: signin.php');
  exit();
} else{
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <script src="../assets/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.111.3">
  <title>Book Upload</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .text-center-container {
      text-align: center;
    }
  </style>
  <link href="checkout.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary">
<div class="container">
  <?php
  include '_library/load.php';
  loadTemplate("_upload");
  ?>
  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1">&copy; Made with by Vignesh SB</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="checkout.js"></script>
</body>
</html>
<?php
}
?>
