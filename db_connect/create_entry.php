<?php
 
/*
 * Following code will create a new entry row
 * All entry details are read from HTTP Post Request
 */

/* if started from commandline, wrap parameters to $_POST and $_GET */
if (!isset($_SERVER["HTTP_HOST"])) {
  parse_str($argv[1], $_GET);
  parse_str($argv[1], $_POST);
}
 
// array for JSON response
$response = array();
 
// check for required fields
if (
	isset($_POST['Email']) &&
	isset($_POST['SaltedHash']) &&
	isset($_POST['Salt']) &&
 	isset($_POST['FirstName']) && 
 	isset($_POST['LastName']) &&
	isset($_POST['Data'])) {
 
    $Email = $_POST['Email'];
    $SaltedHash = $_POST['SaltedHash'];
    $Salt = $_POST['Salt'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Data = $_POST['Data'];
 
    // include db connect class
    require_once __DIR__ . '/db_connect.php';
 
    // connecting to db
    $db = new DB_CONNECT();
    // mysql inserting a new row
    
	$result = mysql_query("INSERT INTO User_Data(Email, SaltedHash, Salt, FirstName, LastName, Data) VALUES('$Email', '$SaltedHash', '$Salt', '$FirstName', '$LastName', '$Data')");
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Product successfully created.";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "An error occurred.";
 
        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>
