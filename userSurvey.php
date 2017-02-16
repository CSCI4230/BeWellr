<?php
	include 'header.php';
	protect_page();
?>
    
<div class = "suvContainer">You are about to embark on a journey to a healthier life. But before you do so, we need you to take a pre-assessment survey. This will allow us to collect data needed and also see the progress you make over the next 4-weeks compared to how you start.</div>
    
<div class="guest-ages-section">
  <div class="form">
      <p class="message">Select your stage in life.</p>
    <form class="guest-ages" action="survey.php?youngAdult" method = "post">
        <button>Student</button>
      </form>
      <form class="guest-ages" action="survey.php?Adult" method="post">
        <button>Working</button>
      </form>
      <form class="guest-ages" action="survey.php?olderAdult" method="post">
      <button>Retired</button>
    </form>
  </div>
</div>