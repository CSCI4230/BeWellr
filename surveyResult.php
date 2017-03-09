<?php

include 'header.php';
include 'db_connect/db_config.php';
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
$data = $_SESSION['data'];
?>

<h1>Preassessment Results</h1>
<div class = "chart">
<canvas id = "barChart"></canvas>
<script>
	var obj = <?php echo json_encode($data);?>;</script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src = "chart.js"></script>
</div>
 
<?php 
        if (logged_in() == true) { ?>
            <div class = "suvContainer"><b>Thank you for taking this survey!</b> We hope you are ready for the journey to living a better life. When you are ready <a href="intervention.php" target="_blank">click here to start your exciting 4-week intervention</a></div>
    <?php    }
        else if (logged_in() == false) { ?>
            <div class = "suvContainer"><b>Thank you for taking this survey!</b> If you are willing to give yourself a chance to live a better life, <a href="register.php" target="_blank">click here to register with BeWell`r!</a></div>
    <?php    }
        ?>
