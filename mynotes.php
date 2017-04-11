<DOCTYPE! HTML>

<html>
 <body>
   <?php
    include 'header.php';
      require_once __DIR__ . '/db_connect/db_config.php';

    // //connect to MySQL
    // $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    //
    // if(!$connection)
    // {
    //   die("Connection error: " .mysqli_connect_error());
    // }
    // else {
    //   echo "";
    // }
    //
    // //current logged in user
    // $logged_in = $_SESSION['email'];
    //
    // //SQL query that pulls user information from the user_data table
    // $query = "SELECT note, date FROM notes WHERE email = '$logged_in'";
    //
    // $result = mysqli_query($connection, $query);
    //
    //   if(mysqli_num_rows($result) > 0)
    //   {
    //       while($row = mysqli_fetch_array($result))
    //       {
    //         $note = $row["note"];
    //         $date = $row["date"];
    //       }
    //   }
    //   else
    //   {
    //       echo("No results");
    //   }
    //
    //     mysqli_close($connection);

    ?>
  <div class="middleContainer">
    <h3 class="accountInfo"><u>Notes</u></h3>
    <div class="personalInfo">
      <p>Date: </p>
      <p>Note: </p>
    </div>
  </div>
 </body>
</html>
