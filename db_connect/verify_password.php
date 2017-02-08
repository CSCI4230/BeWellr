<?php     
 
/*
 * verifyPassword returns true if the password input matches the true password, and false otherwise
 *
 * Parameters: 
 *      userid - the identifier of the user whose password is being verified
 *      password - the string being compared against the user's password
 */

include 'db_connect/db_config.php';
 
function verifyPassword($user_id, $password){
    
    // establish a connection to the database
    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE );

	//Check our connection
	if ( $mysqli->connect_error ) {
	die( 'connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect-error );
	}	

    // retrieve the users hash
    $sql = "SELECT saltedhash FROM User_Data WHERE user_id = $user_id";
    $hash = $mysqli->query($sql);
    $row = $hash->fetch_assoc();
    // verify the password is correct
    return password_verify($password, $row['saltedhash']);

    //Close the connection
    $mysqli->close();
}
?>
