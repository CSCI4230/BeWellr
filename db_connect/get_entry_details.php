<?php
 
/*
 * Following code will get single entry details
 * An entry is identified by Email
 */

/* if started from commandline, wrap parameters to $_POST and $_GET */
if (!isset($_SERVER["HTTP_HOST"])) {
  parse_str($argv[1], $_GET);
  parse_str($argv[1], $_POST);
}

// array for JSON response
$response = array();
 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
// check for post data
if (isset($_GET["Email"])) {
    $Email = $_GET['Email'];

    // get an entry from entry table
    $result = mysql_query("SELECT *FROM User_Data WHERE Email = $Email");

    if (!empty($result)) {
        // check for empty result
        if (mysql_num_rows($result) > 0) {
 
            $result = mysql_fetch_array($result);
 
            $entry = array();
            $entry["Email"] = $result["Email"];
            $entry["SaltedHash"] = $result["SaltedHash"];
            $entry["Salt"] = $result["Salt"];
            $entry["FirstName"] = $result["FirstName"];
            $entry["LastName"] = $result["LastName"];
            $entry["Data"] = $result["Data"];
            // success
            $response["success"] = 1;
 
            // user node
            $response["entry"] = array();
 
            array_push($response["entry"], $entry);
 
            // echoing JSON response
            echo json_encode($response);
        } else {
            // no entry found
            $response["success"] = 0;
            $response["message"] = "No entry found";
 
            // echo no users JSON
            echo json_encode($response);
        }
    } else {
        // no entry found
        $response["success"] = 0;
        $response["message"] = "No entry found";
 
        // echo no users JSON
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
