<?php     
 
/*
 * verify_password.php returns true if the password input matches the true password, and false otherwise
 *
 * Parameters: 
 *      userID - the identifier of the user whose password is being verified
 *      password - the string being compared against the user's password
 */
 
include 'db_connect\db_config.php';

// check for required post data
if (isset($_POST['userID']) && isset($_POST['password'])) {
    
    // parse post data into variables
    $userID = $_POST['userID'];
    $password = $_POST['password'];
    
    // establish a connection to the database
    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE );

	//Check our connection
	if ( $mysqli->connect_error ) {
	die( 'connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect-error );
	}	

    // retrieve the users hash
    $sql = "SELECT saltedhash FROM User_Data WHERE user_id = $userID";
    $hash = $mysqli->query($sql);

    // verify the password is correct
    return password_verify($password, $hash);

    //Close the connection
    $mysqli->close();
}
else 
{
    // required field is missing
    return false;
}
?>
