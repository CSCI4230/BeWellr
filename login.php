<?php
  ini_set('display_errors',1); // for error checking
  error_reporting(E_ALL);      // for error checking
  session_start();
	
  include_once 'header.php';
  require_once __DIR__ . '/db_connect/verify_password.php';
  
       /* $email = $_POST['email'];
      $password = $_POST['password'];
      
    // retrieve the users hash
    $sql = "SELECT saltedhash FROM user_data WHERE email = $email";
    $hash = $mysqli->query($sql);
    // verify the password is correct
   
      if (password_verify($password, $hash);)
      {
          $_SESSION['email'] = $_POST['email'];
          header("Location: welcome.php");
      }
      else
      {
          echo "Invalid Email or Password";
      }*/
  
  if ($_POST && !empty($_POST['email']) && !empty($_POST['password']) )
  {
  
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      /*// connect to database
      $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

      // check connection
      if ($mysqli->connect_error)
      {
          die('Connection error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect-error);
      }

      // retrieve the users hash
      $sql = "SELECT saltedhash FROM user_data WHERE email = '$email'";
      $result = $mysqli->query($sql);

      $assoc = $result->fetch_assoc();
      $hash = $assoc['saltedhash'];

      // verify the password is correct
      $correct = password_verify($password, $hash);*/
      
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
