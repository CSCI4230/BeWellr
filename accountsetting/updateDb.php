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
	
	echo "<table border=1>"
	<tr>
	<th>Topic</th>
	<th><Name</th>
	<th>Attendance</th>
	</tr>;
	//Execute the query
	//if(mysqli_query($con,$sql))
		//header("refresh:2; url=account.php");
	//else
		//	echo "Not Updated";
?>
while($record = mysql_fetch_array($myData)){
	echo "<form action=updata.php method=post>";
	echo "<tr>";
	echo "<td>"; . "<input type=text name=email=" . $record['email'] . "</td>";
	echo "<td>"; . "<input type=text name=First Name=" . $record['first'] . "</td>";
	echo "<td>"; . "<input type=text name=Last Name=" . $record['last'] . "</td>";
	echo "<td>"; . "<input type=text name=Date of Birth" . $record['birth'] . "</td>";
	echo "<td>"; . "<input type=text name=Weight number=" . $record['weight'] . " </td>";
	echo "<td>"; . "<input type=text name=Height number=" . $record['height'] . " </td>";
	echo "<td>"; . "<input type=text name=Sex=" . $record['gender'] . " </td>";
	echo "</form>";
	
?>	

	<h1>Account Update</h1>
	
    <div class="Update-page">
        <div class="form">
            <form method="post" action="">
			<p>Update First name</p>
			 <input name="email" type="email" placeholder="email" required />
			<input name="newname" type="text" placeholder="new name" required />
			<button>Reset</button>
			</form>
        </div>
    </div>