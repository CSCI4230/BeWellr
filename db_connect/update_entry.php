<?php
 
/*
 * Following code will update a entry information
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
if (isset($_POST['Email']) && isset($_POST['Data'])) {
 
    $Email = $_POST['Email'];
    $Data = $_POST['Data'];
    // include db connect class
    require_once __DIR__ . '/db_connect.php';
 
    // connecting to db
    $db = new DB_CONNECT();
 
    // mysql update row with matched Email
      $result = mysql_query("UPDATE User_Data SET Data = '$Data' WHERE Email = $Email");
 
    // check if row inserted or not
    if ($result) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "Entry successfully updated.";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
       echo "failed";
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>
