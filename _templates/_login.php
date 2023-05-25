<?php
if(isset($_POST['email']) and isset($_POST['password'])){
  $username=$_POST['email'];
  $password=$_POST['password'];
if(validate($username,$password)){
  setcookie('auth', 'true', time() + (86400 * 30), '/');
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login Successful</title>
  <script>
    setTimeout(function() {
      window.location.href = "main.php";
    }, 3000);
  </script>
</head>
<body>
  <h1>Login Successful!</h1>
  <p>You will be redirected to the home page 3 seconds...</p>
</body>
</html>
<?php
}
}else{
?>
<main class="form-signin w-100 m-auto">
  <form method="POST" action="signin.php">
    <h1 class="h3 mb-3 fw-normal">Sign in</h1>
    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@vitstudent.ac.in">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">Dont have an accout? <a href="https://vigneshsb.me/signup.php">Sign-up</a></p>
    <p class="mt-5 mb-3 text-body-secondary">&copy; Vignesh SB 2023</p>
  </form>
</main>
<?php
}
?>