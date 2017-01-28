<?php     
 
/*
 * verify_password.php returns true if the password input matches the true password, and false otherwise
 *
 * Parameters: 
 *      userID - the identifier of the user whose password is being verified
 *      password - the string being compared against the user's password
 */
 
// the file db_connect.php is required to connect to the database, and for this program to execute
require_once __DIR__ . '/db_connect.php';
 
// check for required post data
if (isset($_POST['userID']) && isset($_POST['password']) {
    
    // parse post data into variables
    $userID = $_POST['userID'];
    $password = $_POST['password'];
    
    // establish a connection to the database
    $db = new DB_CONNECT();

    // retrieve the users hash
    $getDetailsURL = '/get_entry_details.php';
    $hash = http_post_data($getDetailsURL, $userID, 'SaltedHash');

    // verify the password is correct
    return password_verify($password, $hash);

} 

else {
    // required field is missing
    return false;
} 
?>
