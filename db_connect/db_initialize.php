<?php

/*
 * db_initialize.php initializes the database
 */

    include_once 'db_config.php';
    
    // Create connection
    $makeDbConnection = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD);
    // Check connection
    if ($makeDbConnection->connect_error) 
    {
        die("Connection failed: " . $makeDbConnection->connect_error);
    }
    
    // Drop old database
    $sql = "DROP DATABASE bewellr";
    if ($makeDbConnection->query($sql) === TRUE) 
    {
        echo "Old database dropped successfully.<BR>";
    } 
    else 
    {
        echo "Error dropping database: " . $makeDbConnection->error;
    }

    // Create new database
    $sql = "CREATE DATABASE bewellr";
    if ($makeDbConnection->query($sql) === TRUE) 
    {
        echo "New database created successfully.<BR>";
    } 
    else 
    {
        echo "Error creating database: " . $makeDbConnection->error;
    }
    $makeDbConnection->close();

    // Create connection
    $makeTablesConnection = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($makeTablesConnection->connect_error) {
        die("Connection failed: " . $makeTablesConnection->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE User_Data (
    user_id bigint(255) AUTO_INCREMENT KEY,
    email varchar(255),
    saltedhash varchar(255),
    firstname varchar(255),
    lastname varchar(255),
    dob date,
    weight int(50),
    gender varchar(6),
    workstatus varchar(200),
    organization varchar(200),
    occupation varchar(200),
    ethnicity varchar(200),
    maritalstatus varchar(200),
    education varchar(200)
    )";

    if ($makeTablesConnection->query($sql) === TRUE) 
    {
        echo "Table User_Data created successfully. <BR>";
    } 
    else 
    {
        echo "Error creating table: " . $makeTablesConnection->error;
    }
    $makeTablesConnection->close();
    
    
    // Create connection
    $makeTablesConnection2 = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($makeTablesConnection2->connect_error) {
        die("Connection failed: " . $makeTablesConnection2->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE Quotes (
    quote text
    )";

    if ($makeTablesConnection2->query($sql) === TRUE) 
    {
        echo "Table Quotes created successfully.<BR>";
    } 
    else 
    {
        echo "Error creating table: " . $makeTablesConnection2->error;
    }

    $makeTablesConnection2->close();    
    
    
    // Create connection
    $makeTablesConnection3 = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($makeTablesConnection3->connect_error) {
        die("Connection failed: " . $makeTablesConnection3->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE Groups (
    groupname tinytext,
    members text
    )";

    if ($makeTablesConnection3->query($sql) === TRUE) 
    {
        echo "Table Groups created successfully.<BR>";
    } 
    else 
    {
        echo "Error creating table: " . $makeTablesConnection3->error;
    }

    $makeTablesConnection3->close();    

?>
