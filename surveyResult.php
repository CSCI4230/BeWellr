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
