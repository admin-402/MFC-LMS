<?php
// Clear the authentication cookie by setting its expiration time in the past
setcookie('auth', '', time() - 3600, '/');
// Redirect the user to the sign-in page or any other desired page
header('Location: signin.php');
exit();

?>