<?php
$signup=false;
if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email']) and isset($_POST['Number'])){
 $username = $_POST['username'];
 $password = $_POST['password'];
 $email = $_POST['email'];
 $phone = $_POST['Number'];
 $result=insertUser($username, $password, $email, $phone);
 if ($result == "Success") {
     $signup=true;
 } else {
     $signup=false;
     exit();
 }
}
?>
<?php
if($signup){
  ?>
   <h1>Signup Successful!</h1>
  <p>Congratulations! You have successfully signed up.</p>
  <p>Click <a href="https://vigneshsb.me/signin.php">here</a> to login.</p>
<?php
} else{
  ?>
<main class="form-signin w-100 m-auto">
<form method="POST" action="signup.php">
        <h1 class="h3 mb-3 fw-normal">Sign up</h1>
        <div class="form-floating">
          <input name="username" type="text" class="form-control" id="floatingUserName" placeholder="UserName">
          <label for="floatingUserName">User Name</label>
        </div>
        <div class="form-floating">
          <input name="email" type="email" class="form-control" id="floatingEmail" placeholder="name@vitstudent.ac.in">
          <label for="floatingEmail">Email address</label>
        </div>
        <div class="form-floating">
          <input name="Number" type="text" class="form-control" id="floatingpn" placeholder="+91 00000 00000">
          <label for="floatingpn">Phone number</label>
        </div>
        <div class="form-floating">
          <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
          <input name="confpasswd" type="Password" class="form-control" id="floatingConfirmPassword" placeholder="Confirm Password">
          <label for="floatingConfirmPassword">Confirm Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
        <p class="mt-5 mb-3 text-body-secondary">Already have an account? <a href="https://vigneshsb.me/signin.php">Sign in</a></p>
        <p class="mt-5 mb-3 text-body-secondary">&copy; Vignesh SB 2023</p>
      </form>
</main>
<?php
}
?>