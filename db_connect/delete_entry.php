<?php
 
/*
 * Following code will delete an entry from table
 * An entry is identified by Email
 */

/* if started from commandline, wrap parameters to $_POST and $_GET */
if (!isset($_SERVER["HTTP_HOST"])) {
  parse_str($argv[1], $_GET);
  parse_str($argv[1], $_POST);
}

// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['Email'])) {
    $Email = $_POST['Email'];
 
    // include db connect class
    require_once __DIR__ . '/db_connect.php';
 
    // connecting to db
    $db = new DB_CONNECT();
 
    // mysql update row with matched email
    $result = mysql_query("DELETE FROM User_Data WHERE Email = $Email");
 
    // check if row deleted or not
    if (mysql_affected_rows() > 0) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "Entry successfully deleted";
 
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
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>
