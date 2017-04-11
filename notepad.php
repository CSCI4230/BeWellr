<DOCTYPE! HTML>

<html>
 <body>
   <?php include 'header.php';
     require_once __DIR__ . '/db_connect/db_config.php';
     require_once __DIR__ . '/db_connect/verify_password.php';
         require_once __DIR__ . '/db_connect/delete_account.php';

     ini_set('display_errors',1); // for error checking
     error_reporting(E_ALL);      // for error checking

   //connect to MySQL
   $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

   if(!$connection)
   {
   	die("Connection error: " .mysqli_connect_error());
   }
   else {
   	echo "";
   }

   //current logged in user
   $logged_in = $_SESSION['email']; ?>

   <h2 class="surveyTitle">Notepad</h2>

   <div class="paper">
    <div class="paper-content">
        <textarea autofocus>What's on your mind???</textarea>
    </div>
</div>

 </body>
</html>
