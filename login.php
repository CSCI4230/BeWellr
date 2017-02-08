<?php
  ini_set('display_errors',1); // for error checking
  error_reporting(E_ALL);      // for error checking
  session_start();
	
  include_once 'header.php';
  require_once __DIR__ . '/db_connect/verify_password.php';
  
  if ($_POST && !empty($_POST['email']) && !empty($_POST['password']) )
  {
  
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      $result = verifyPassword($email, $password);

      if ($result)
      {
          $_SESSION['email'] = $_POST['email'];
          header("Location: welcome.php");
      }
      else
      {
          echo "Invalid Email or Password";
      }
      
      
  }
?>
    
<h1>Login</h1>
 
<div class="login-page">
  <div class="form" >
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method = "post">
      <input type="text" name = "email" placeholder="Email"/>
      <input type="password" name = "password" placeholder="Password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </form>
  </div>
</div>
