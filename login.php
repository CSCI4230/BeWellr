<?php
	include 'header.php';
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
