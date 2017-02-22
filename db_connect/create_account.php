<?php     
 
/*
 * createAccount creates a new entry in the database. It returns true if the entry was created successfully and false otherwise.
 */

//include 'db_config.php';
 
function createAccount($email, $password, $firstname, $lastname, $dob, $weight, $height, $gender, $workstatus, $organization, $occupation, $ethnicity, $maritalstatus, $education)
{
    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE );

    //Check our connection
    if ( $mysqli->connect_error ) 
    {
        return false;
    }	
	    
    // Create salted hash for the password
    $saltedhash = password_hash($password, PASSWORD_DEFAULT);

    //create user 
    $sql = "INSERT INTO user_data ( email, saltedhash, firstname, lastname, dob, weight, height, gender, workstatus, organization, occupation, ethnicity, maritalstatus, education) VALUES ( '{$mysqli->real_escape_string($_POST['email'])}', '$saltedhash', '{$mysqli->real_escape_string($_POST['firstname'])}', '{$mysqli->real_escape_string($_POST['lastname'])}', '{$mysqli->real_escape_string($_POST['dob'])}', '{$mysqli->real_escape_string($_POST['weight'])}', '{$mysqli->real_escape_string($_POST['height'])}','{$mysqli->real_escape_string($_POST['gender'])}', '{$mysqli->real_escape_string($_POST['workstatus'])}', '{$mysqli->real_escape_string($_POST['organization'])}', '{$mysqli->real_escape_string($_POST['occupation'])}', '{$mysqli->real_escape_string($_POST['ethnicity'])}', '{$mysqli->real_escape_string($_POST['maritalstatus'])}', '{$mysqli->real_escape_string($_POST['education'])}'  )";
    $insert = $mysqli->query($sql);
    
    //Close the connection
    $mysqli->close();

    //Print response from MySQL
    if ( $insert ) 
    {
        return true;
    }
    else
    {
        return false;
    }

    //Close the connection
    $mysqli->close();
}
?>
