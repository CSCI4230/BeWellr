<?php
 
 /*
  * All database connection variables
  *
  * Database Setup Information:
  *   DB Name should be: bewellr
  *   Table Name should be: User_Data
  *   6 columns:  Email (varchar 255), SaltedHash (varchar 255), Salt (varchar 255),
  *               FirstName (varchar 255), LastName (varchar 255), and Data (text)
  *
  * Set the definition for DB_USER to the admin username for your database.
  * Set the definition for DB_PASSWORD to that account's password.
  * Set DB_SERVER to the server address. If you're running a local database for testing, keep it localhost.
  */
    
    define('DB_USER', "username"); // db user
    define('DB_PASSWORD', "password"); // db password (mention your db password here)
    define('DB_DATABASE', "bewellr"); // database name
    define('DB_SERVER', "localhost");// db server
?>
