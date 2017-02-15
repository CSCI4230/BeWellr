<DOCTYPE! HTML>

<html>
 <body>
 <?php
	include 'header.php';
 ?>
  <div class="middleContainer">
    <h3 class="accountInfo"><u>Account Information</u></h3>
    <div class="personalInfo">
      <p>First Name: </p>
      <p>Last Name: </p>
      <p>Date of Birth: </p>
      <p>Weight: </p>
      <p>Height: </p>
      <p>Gender: </p>
    </div>
    <div class="deleteContainer">
      <h3 class="accountInfo"><u>Delete Account</u></h3>
      <p id="deleteParagraph">This action is permanent; think twice before proceeding!</p>
      <div class="deleteButton">
        <button class="btn btn-danger" id="delete">Delete Account</button>
      </div>
    </div>
 </body>
</html>
