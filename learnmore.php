<!DOCTYPE html>
<html lang="en">
<head>
  <title>Learn More</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 {
          background-image: url("images/smallerBackground.jpg");
          color: #ffffff;
  }
  .bg-2 {
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 {
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 {
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">HELLO</a></li>
        <li><a href="#">WHAT</a></li>
        <li><a href="#">WHERE</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="images/beckerc_1.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3>Associate Professor at East Carolina University</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">What is BeWell'r?</h3>
  <p>The Be Well’r System (BWS) is a toolbox designed to assess, educate, and evaluate lifestyles, while providing reinforcing data for health promoting actions. These tools align with the National Wellness Institute’s (NWI) mission and core qualities by helping professionals and organizations develop lifestyles that have been shown to support optimal individual and community health and wellness. BWS provides a multidimensional educational lifestyle assessment of positive actions that include the 6 NWI dimensions of wellness, physical, social, emotional, spiritual, intellectual and occupational, plus an additional dimension of wellness - environment. In addition, the system also expands upon the occupational dimension to include all vocations, enabling a focus on wellness promoting actions, including those with or without specific occupations, such as students and or retirees. Data generated from BWS supports NWI’s lifelong learning mission by promoting learning and providing professionals and individuals with data about the 7 dynamic factors associated with health and wellbeing (physical, social, emotional, spiritual, intellectual, vocational and environmental). The data generated can be analyzed and used to create positive, tailored, innovative environments and interventions to allow individuals and organizations to achieve their full potential. Evidence suggests that tailored wellness programs for organizations, companies or specific groups can have a positive influence on wellness and productivity.  Since better health can only be achieved by engaging in actions that enable and create higher levels of physical, mental and social well-being, the BWS assessment tools demonstrated here can help NWI achieve its vision and mission.</p>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">
  <h3 class="margin">More about BeWell'r</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Currently, health-wellness focused assessments and interventions have been guided by pathogenesis. Using a traditional pathogenic
model of disease means tools measure signs, symptoms, diseases and associated risk factors. Though this approach may alert a person or a health provider to negative behaviors or conditions, recognizing negative states does not necessarily cause or lead to the creation of positive health and wellness states of physical, mental and social well-being.</p>
      <img src="images/cleanse.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p>Studies using BWS tools have shown that those who engaged in more wellness promoting behaviors assessed by BWS had higher levels of performance, at school and at work, as well as, higher levels of life satisfaction and perceived health.</p>
      <img src="images/balance.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p>Articles have been published about the multiple validated versions of the BWS-SWPS, including Young Adult, Adult, Older Adult and Arabic versions. Adolescent and Early Childhood versions are developed and are undergoing testing. Journal articles about these version documenting initial test results are in preparation.
Published results from studies using these tools have had a significant positive correlation to measures of satisfaction and perceived health and a significant negative correlation to symptoms and depression.</p>
      <img src="images/strength.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Contact Us <a href="#">placeholder</a></a></p>
</footer>

</body>
</html>
