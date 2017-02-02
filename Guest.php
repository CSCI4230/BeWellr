<?php
	include 'header.php'
?>
    
<h1>Guest Age Selection</h1>
    
<div class="guest-ages-section">
  <div class="form">
      <p class="message">Select your age range.</p>
    <form class="guest-ages" action="survey.php?youngAdult" method = "post">
        <button>Young Adult (under 18)</button>
      </form>
      <form class="guest-ages" action="survey.php?Adult" method="post">
        <button>Adult (18-30)</button>
      </form>
      <form class="guest-ages" action="survey.php?olderAdult" method="post">
      <button>Older Adult (over 30)</button>
    </form>
  </div>
</div>
