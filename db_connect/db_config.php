<?php
 
 /*
  * All database connection variables
  *
  * Database Setup Information:
  * DB Name should be: bewellr
  * Table: User_Data
  *     Fields:
  *         user_id         bigint(255)
  *         email           varchar(255)
  *         saltedhash      varchar(255)
  *         firstname       varchar(255)
  *         lastname        varchar(255)
  *         dob             date
  *         weight          int(50)
  *         gender          varchar(6)
  *         workstatus      varchar(200)
  *         organization    varchar(200)
  *         occupation      varchar(200)
  *         ethnicity       varchar(200)
  *         maritalstatus   varchar(200)
  *         education       varchar(200)
  * Table: Quotes
  *     Fields:
  *         quote           text
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
