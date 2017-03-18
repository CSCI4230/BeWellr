<?php 
    include 'header.php';   

    // the file is required, so if it isn't there, this file will not be executed
    require_once __DIR__ . '/db_connect/db_config.php';

    $_SESSION['message'] = '';
    
    //connect to MySQL
    if ($_POST['submittedVerificationKey'] != NULL) {
echo $_POST['submittedVerificationKey'];
echo $_POST['email'];    
	    session_start();
	    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE );
	    
	    //Check our connection
	    if ( $mysqli->connect_error ) {
	        die( 'connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect-error );
	    }
	    
	    // set correctKey to the corresponding key value in unverified_users for the corresponding email value
	    $email = $_SESSION['email'];
        $query = "SELECT verificationKey FROM unverified_users WHERE email = '$email'";
        $result = mysqli_query($connection, $query);
  	    if(mysqli_num_rows($result) > 0)
  	    {
  			while($row = mysqli_fetch_array($result))
  			{
  				$correctVerificationKey = $row["verificationKey"];
  			}
  	    }
  	    else
  	    {
echo "hi2";
  			echo("No results");
  	    }
	    
	    // set submittedKey to the entered value
	    $submittedVerificationKey = $_POST['submittedVerificationKey'];
	    
	    //Check for matching password
	    if ($correctVerificationKey == $submittedVerificationKey) {

            // transfer info from unverified_users to user_data
            // retrieve the information from user_data
            $query = "SELECT saltedhash, firstname, lastname, dob, weight, height, gender, workstatus, organization, occupation, ethnicity, maritalstatus, education FROM unverified_users WHERE email = '$email'";
            $result = mysqli_query($connection, $query);
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    $saltedhash = $row["saltedhash"];
                    $firstname = $row["firstname"];
                    $lastname = $row["lastname"];
                    $dob = $row["dob"];
                    $weight = $row["weight"];
                    $height = $row["height"];
                    $gender = $row["gender"];
                    $workstatus = $row["workstatus"];
                    $organization = $row["organization"];
                    $occupation = $row["occupation"];
                    $ethnicity = $row["ethnicity"];
                    $maritalstatus = $row["maritalstatus"];
                    $education = $row["education"];
                }
            }
            else
            {
                echo("No results");
            }
            // create a new entry for the verified user into user_data
            $sql = "INSERT INTO unverified_users ( email, saltedhash, firstname, lastname, dob, weight, height, gender, workstatus, organization, occupation, ethnicity, maritalstatus, education) VALUES ( '$email', '$saltedhash', '$firstname', '$lastname', '$dob', '$weight', '$height','$gender', '$workstatus', '$organization', '$occupation', '$ethnicity', '$maritalstatus', '$education'  )";
		    $insert = $mysqli->query($sql);
		    $_SESSION['message'] = "The account has been verified.";
		    $username = $_POST['email'];
		    $_SESSION['username'] = $username;
		    header("location:login.php"); //redirect to home

		    //Print response from MySQL
		    if ( $insert ) {
		        echo "Success!  Row ID: {$mysqli->insert_id}";
		    }
		    else{
		        die("Error: {$mysqli->errno} : {$mysqli->error}");
		    }
	    }
	    else {
	        $_SESSION['message'] = "The entered key is incorrect";
	    }

        //Close the connection
        $mysqli->close();
    }
?>

<!--This is an error message.-->
<div class="alert alert-error">
 <?= $_SESSION['message'] ?>
</div>

    <h1>Verify Email</h1>
	
    <div class="login-page">
        <div class="form">
            <form method="post" action="">
			<p>Please enter your verification key that was emailed to you.</p>
            <input name ="submittedVerificationKey"  type="text" placeholder="Your verification key"/>
            <button>Submit</button>
			</form>
        </div>
    </div>

