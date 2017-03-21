<html>
<head>
<title>Update Records </title>
</head>
<body>
<?php
include 'header.php';
include 'db_connect/db_config.php';
	//connect MYSQL
	 $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
	 //Select Database
	$myData = mysqli_select_db($con, "bewellr");
	
	//Update Query
	//$sql = "SELECT * user_data WHERE user_id='7'";
	
	if(isset($_POST['update'])){
		$UpdateQuery + "UPDATE user_data SET firstname-'$_POST[first]' WHERE email='$_POST[email]'";
		mysql_query($UpdateQuery,$con);

	};
	
	//Execute the query
	//if(mysqli_query($con,$sql))
		//header("refresh:2; url=account.php");
	//else
		//	echo "Not Updated";
?>
	<h1>Account Update</h1>
    <div class="Update-page">
        <div class="form">
            <form method="post" action="">
			<p>Update First name</p>
			<input name="email" type="email" placeholder="email" required />
			<input name="newname" type="text" placeholder="Update First name" required />
			<input name="email" type="email" placeholder="Update email" required />
			<input name="newname" type="text" placeholder="Update Last name" required />
			<input name="email" type="email" placeholder="Update Email" required />
			<input name="newname" type="text" placeholder="Update Weight" required />
			<input name="email" type="email" placeholder="Update Height" required />
			<input name="newname" type="text" placeholder="Update Gender" required />
			<button>Update</button>
			</form>
        </div>
    </div>
