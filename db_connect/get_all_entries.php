get_all_entries.php
<?php
 
/*
 * Following code will list all the entries
 */
 
// array for JSON response
$response = array();
 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
// get all entries from User_Data table
$result = mysql_query("SELECT *FROM User_Data") or die(mysql_error());
 
// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // entries node
    $response["entries"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $entry = array();
        $entry["Email"] = $row["Email"];
        $entry["SaltedHash"] = $row["SaltedHash"];
        $entry["Salt"] = $row["Salt"];
        $entry["FirstName"] = $row["FirstName"];
        $entry["LastName"] = $row["LastName"];
        $entry["Data"] = $row["Data"];
 
        // push single entry into final response array
        array_push($response["entries"], $entry);
    }
    // success
    $response["success"] = 1;
 
    // echoing JSON response
    echo json_encode($response);
} else {
    // no entries found
    $response["success"] = 0;
    $response["message"] = "No entries found";
 
    // echo no users JSON
    echo json_encode($response);
}
?>
