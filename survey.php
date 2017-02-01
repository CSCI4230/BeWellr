<?php include 'header.php';
$names=file('young_adult_survey_questions.txt');
?>
<div class="container2">
<?php
foreach($names as $name)
{?>
				<h3 class="border"><?php echo $name?></h3>
				<form>
				<div class="qPadding" id="q1Bullets">
        <label class="border2"><input type="radio" name="hello" checked>Never</label>                 
        <label class="border2"><input type="radio" name="hello">Once in a while</label> 
        <label class="border2"><input type="radio" name="hello">Sometimes</label> 
        <label class="border2"><input type="radio" name="hello">Often</label>
        <label class="border2"><input type="radio" name="hello">Very Often</label>
        <label class="border2"><input type="radio" name="hello">Always</label>
      </div>
      </form>
<?php }
		?>
 </div>

