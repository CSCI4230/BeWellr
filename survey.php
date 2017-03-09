<?php 
include 'header.php';	
include 'db_connect/db_config.php';
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
//current logged in user
  $logged_in = $_SESSION['email'];
  //SQL query that pulls user information from the user_data table
  $query = "SELECT user_id FROM user_data WHERE email = '$logged_in'";
  $result = mysqli_query($connection, $query);
  $user_idArray = mysqli_fetch_array($result);
  $user_id = $user_idArray['user_id'];
?>

<form class="survey" action="" method="post">
<div class="container2">
<?php
	$type;
	$questionNumber = 0;
	$social = 0;
	$vocational = 0;
	$emotional = 0;
	$physical = 0;
	$intellectual = 0;
	$spiritual = 0;
	$environmental = 0;
	$count = 0;
	
	//print_r($_POST); for testing, prints the post array
	if (isset($_GET['youngAdult']) && empty ($_GET['youngAdult'])) {
		$type = "YA";
	}
	
	else if (isset($_GET['Adult']) && empty ($_GET['Adult'])) {
		$type = "A";
	}
	
	else if (isset($_GET['olderAdult']) && empty ($_GET['olderAdult'])) {
		$type = "OA";
	}
	$query = mysqli_query($connection, "SELECT question, social, vocational, emotional, physical, intellectual, spiritual, environmental from preassessment where $type = 1");
	$questionArray;
	while ($row = mysqli_fetch_assoc($query)) {
	$questionArray[$questionNumber] = $row;	
	?>
				<h3 class="border"><?php echo $row["question"]?></h3>
				<div class="qPadding" id="q1Bullets">
        <label class="border2"><input type="radio" name="<?php echo $questionNumber ?>" value=0>Never</label>                 
        <label class="border2"><input type="radio" name="<?php echo $questionNumber ?>" value=1>Once in a while</label> 
        <label class="border2"><input type="radio" name="<?php echo $questionNumber ?>" value=2>Sometimes</label> 
        <label class="border2"><input type="radio" name="<?php echo $questionNumber ?>" value=3>Often</label>
        <label class="border2"><input type="radio" name="<?php echo $questionNumber ?>" value=4>Very Often</label>
        <label class="border2"><input type="radio" name="<?php echo $questionNumber ?>" value=5>Always</label>
      </div>
      
    
<?php
	$questionNumber++;
	}
	
	if ( ! empty( $_POST ) )	
	{
		while($count < $questionNumber){
			if ($questionArray[$count]['social'] == 1){
				$social = $social + $_POST[$count];
			}
			else if ($questionArray[$count]['vocational'] == 1){
				$vocational = $vocational + $_POST[$count];
			}
			else if ($questionArray[$count]['emotional'] == 1){
				$emotional = $emotional + $_POST[$count];
			}
			else if ($questionArray[$count]['physical'] == 1){
				$physical = $physical + $_POST[$count];
			}
			else if ($questionArray[$count]['intellectual'] == 1){
				$intellectual = $intellectual + $_POST[$count];
			}
			else if ($questionArray[$count]['spiritual'] == 1){
				$spiritual = $spiritual + $_POST[$count];
			}
			else if ($questionArray[$count]['environmental'] == 1){
				$environmental = $environmental + $_POST[$count];
			}
			$count++;
		}
	$sql = "INSERT INTO preassessment_results (user_id, socialScore, vocationalScore, emotionalScore, physicalScore, intellectualScore, spiritualScore, environmentalScore) VALUES ($user_id, $social, $vocational, $emotional, $physical, $intellectual, $spiritual, $environmental)";
	$insert = $connection->query($sql);
			    //Print response from MySQL
		    if ( $insert ) {
		        echo "Success!  Row ID: {$connection->insert_id}";
				//TODO: REDIRECT FROM THIS PAGE ONCE SURVEY IS COMPLETE TO A SURVEY SUMMARY PAGE
		    }
		    else{
		        die("Error: {$connection->errno} : {$connection->error}");
		    }
	}
	

//print_r($questionArray); //this prints the array of arrays for the questions.  it's for testing.
?>
    
    
        <button>Submit</button>
    </form>
		</div>

