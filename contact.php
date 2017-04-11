<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <?php include 'header.php'?>
</head>

<body>
  <div class="contact">

  <?php
  if (empty($_POST) == false) {
    $require_fields = array('first_name', 'email', 'subject', 'message');
    foreach($_POST as $key=>$value) {
      if(empty($value) && in_array($key, $require_fields) == true) {
        $errors[] = '*All fields are required!';
        break 1;
      }
    }
  }
  ?>

  <h3 id="contactTitle">Contact the BeWellr Team</h3>

  <?php

	// function that sends out emails
	function send_email($to, $subject, $body) {
		mail($to, $subject, $body, '');
	}

	// Puts an array into a list form.
	function output_errors($errors){
		return'<ul><li>'. implode('</li><li>', $errors) . '</li></ul>';
	}

  ?>

  <?php
  if (isset($_GET['success']) && empty ($_GET['success']))
  {
    echo 'Your message has been sent! Thank you!';
  }
  else
  {
    if(empty($_POST) == false && empty($errors) == true)
    {
      $subject = $_POST['subject'];
      $to = 'patino37@yahoo.com';
      $body = $_POST['message'] . "\n\n From: ". $_POST['email'];
      send_email($to, $subject, $body);
      header('Location: contact.php?success');
      exit();
    }
    ?>

    <div class = errors>
    <?php
    if (empty($errors) == false) {
       echo output_errors($errors);
    }?>
    </div>

  <div class ="form_Contact">
    <form action="" method="post">
      <input type="text" name = "first_name" placeholder="First Name" />
      <input type="text" name = "email" placeholder="E-mail Address"/>
      <input type="text" name = "subject" placeholder="Subject"/><br><br>
      <textarea name="message" placeholder = "Please share any comments, questions, or feedback with us!"></textarea>
      <input type = "submit" value = "Send"/>
    </form>
  </div>
  <?php } ?>
  </div>
</body>
</html>
