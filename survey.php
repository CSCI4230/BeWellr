<?php include 'header.php';?>
<div class="container2">
<?php
	$fileName;
	if (isset($_GET['youngAdult']) && empty ($_GET['youngAdult'])) {
		$fileName = "young_adult_survey_questions.txt";
	}
	
	else if (isset($_GET['Adult']) && empty ($_GET['Adult'])) {
		$fileName = "adult_survey.txt";
	}
	
	else if (isset($_GET['olderAdult']) && empty ($_GET['olderAdult'])) {
		$fileName = "young_adult_survey_questions.txt";
	}
	
	$names=file($fileName);
	foreach($names as $name)
	{?>
				<h3 class="border"><?php echo $name?></h3>
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
    
    <div class="survey">
        <button>Submit</button>
    </div>
 </div>

