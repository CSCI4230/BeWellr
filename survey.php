<?php 
include 'header.php';	
include 'db_connect/db_config.php';
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

?>
<div class="container2">
<?php
	$type;
	
	if (isset($_GET['youngAdult']) && empty ($_GET['youngAdult'])) {
		$type = "YA";
	}
	
	else if (isset($_GET['Adult']) && empty ($_GET['Adult'])) {
		$type = "A";
	}
	
	else if (isset($_GET['olderAdult']) && empty ($_GET['olderAdult'])) {
		$type = "OA";
	}
	$query = mysqli_query($connection, "SELECT question from preassessment where $type = 1");
	while ($row = mysqli_fetch_assoc($query)) {
	?>
				<h3 class="border"><?php echo $row["question"]?></h3>
				<form>
				<div class="qPadding" id="q1Bullets">
        <label class="border2"><input type="radio" name="hello">Never</label>                 
        <label class="border2"><input type="radio" name="hello">Once in a while</label> 
        <label class="border2"><input type="radio" name="hello">Sometimes</label> 
        <label class="border2"><input type="radio" name="hello">Often</label>
        <label class="border2"><input type="radio" name="hello">Very Often</label>
        <label class="border2"><input type="radio" name="hello">Always</label>
      </div>
      </form>
    
<?php }
?>
    
    <form class="survey" action="#" method="post">
        <button>Submit</button>
    </form>
		</div>

