<?php include 'header.php';
include 'db_connect\db_config.php';
//connect to MySQL
if ( ! empty( $_POST ) ) {
$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE );

//Check our connection
if ( $mysqli->connect_error ) {
	die( 'connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect-error );
}	
//Insert our data.  Look at DB_Config file to 
$sql = "INSERT INTO user_data ( email, firstname, lastname, dob, weight, height, gender, workstatus, organization, occupation, ethnicity, maritalstatus, education) 
VALUES ( '{$mysqli->real_escape_string($_POST['email'])}', '{$mysqli->real_escape_string($_POST['firstname'])}', '{$mysqli->real_escape_string($_POST['lastname'])}',
'{$mysqli->real_escape_string($_POST['dob'])}', '{$mysqli->real_escape_string($_POST['weight'])}', '{$mysqli->real_escape_string($_POST['height'])}','{$mysqli->real_escape_string($_POST['gender'])}', 
'{$mysqli->real_escape_string($_POST['workstatus'])}', '{$mysqli->real_escape_string($_POST['organization'])}', '{$mysqli->real_escape_string($_POST['occupation'])}',
'{$mysqli->real_escape_string($_POST['ethnicity'])}', '{$mysqli->real_escape_string($_POST['maritalstatus'])}', '{$mysqli->real_escape_string($_POST['education'])}'  )";
$insert = $mysqli->query($sql);

//Print response from MySQL
if ( $insert ) {
	echo "Success!  Row ID: {$mysqli->insert_id}";
}
else{
	die("Error: {$mysqli->errno} : {$mysqli->error}");
}

//Close the connection
$mysqli->close();
}
?>


        <h1>Register</h1>
    <div class="login-page">
        <div class="form">
            <form method="post" action="">
			<p>Please fill in the boxes below</p>
            <input name ="firstname"  type="text" placeholder="First Name"/>
            <input name ="lastname"  type="text" placeholder="Last Name"/>
            <input name ="dob" type="date" placeholder="Date of Birth"/>
            <input name="weight" type="number" placeholder="Weight"/>
            <input name="height" type="number" placeholder="Height in Inches"/>
            <input name="email" type="email" placeholder="Email"/>
            <input name="password" type="password" placeholder="Password"/>
            
            <br> Gender <br>
            <select name="gender" type="gender" class="gender">
            <option value="Select">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>
			
			
            <br> Work Status <br>
            <select name="workstatus" type="workstatus" class="workstatus">
            <option value="Select">Select</option>
            <option value="Unemployed">Unemployed</option>
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>    
            </select>
            
			
            <br> My Organization <br>
            <select name="organization" type="organization" class="organization">
            <option value="Select">Select</option>
            <option value="East Carolina University">East Carolina University</option>
            <option value="ECU School of Medicine">ECU School of Medicine</option>
            <option value="Western Kentucky University">Western Kentucky University</option>
            <option value="State of Maine Employees">State of Maine Employees</option>
            <option value="US Marine Corp">US Marine Corp</option>
            </select>
            
            <br> Occupation <br> 
            <select name="occupation" type="occupation" class="occupation">
            <option value="Select">Select</option>
            <option value="Attendant">Attendant</option>
            <option value="Baker">Baker</option>
            <option value="Bank Teller">Bank Teller</option>
            <option value="Barber">Barber</option>
            <option value="Bartender">Bartender</option>
            <option value="Bookkeeper">Bookkeeper</option>
            <option value="Brake Person">Brake Person</option>
            <option value="Bus Driver">Bus Driver</option>
            <option value="Checker">Checker</option>
            <option value="Chef">Chef</option>
            <option value="Chief Executive">Chief Executive</option>
            <option value="Clerk">Clerk</option>
            <option value="Construction Helper">Construction Helper</option>
            <option value="Construction Helper">Construction Helper</option>
            <option value="Cook">Cook</option>
            <option value="Cutler">Cutler</option>
            <option value="Dentist">Dentist</option>
            <option value="Doctor">Doctor</option>
            <option value="Drafts Person">Drafts Person</option>
            <option value="Drill Press Operator">Drill Press Operator</option>
            <option value="Electrician">Electrician</option>
            <option value="Firefighter">Firefighter</option>
            <option value="Garage Guard">Garage Guard</option>
            <option value="General Laborer">General Laborer</option>
            <option value="Homemaker">Homemaker</option>
            <option value="Hospital Aide">Hospital Aide</option>
            <option value="Janitor">Janitor</option>
            <option value="Large Business Manager">Large Business Manager</option>
            <option value="Large Business Owner">Large Business Owner</option>
            <option value="Law Enforcement">Law Enforcement</option>
            <option value="Lawyer">Lawyer</option>
            <option value="Licensed Certified Practitioner">Licensed Certified Practitioner</option>
            <option value="Machine Operator">Machine Operator</option>
            <option value="Machinist">Machinist</option>
            <option value="Mechanic">Mechanic</option>
            <option value="Medium Business Manager">Medium Business Manager</option>
            <option value="Medium Business Owner">Medium Business Owner</option>
            <option value="Nurse">Nurse</option>
            <option value="Optician">Optician</option>
            <option value="Other Manager">Other Manager</option>
            <option value="Other Manual Laborer">Other Manual Laborer</option>
            <option value="Other Professional">Other Professional</option>
            <option value="Other Skilled Laborer">Other Skilled Laborer</option>
            <option value="Painter">Painter</option>
            <option value="Paper Hanger">Paper Hanger</option>
            <option value="Pharmacist">Pharmacist</option>
            <option value="Plumber">Plumber</option>
            <option value="Porter">Porter</option>
            <option value="Professor">Professor</option>
            <option value="Repair Person">Repair Person</option>
            <option value="Reporter">Reporter</option>
            <option value="Retired">Retired</option>
            <option value="Salesperson">Salesperson</option>
            <option value="Secretary">Secretary</option>
            <option value="Small Business Owner">Small Business Owner</option>
            <option value="Social Worker">Social Worker</option>
            <option value="Spot Welder">Spot Welder</option>
            <option value="Student">Student</option>
            <option value="Tailor">Tailor</option>
            <option value="Teacher">Teacher</option>
            <option value="Technician">Technician</option>
            <option value="Timekeeper">Timekeeper</option>
            <option value="Unable to work/Disabled">Unable to work/Disabled</option>
            <option value="Unemployed">Unemployed</option>
            <option value="Waiter">Waiter</option>
            <option value="Welder">Welder</option>
            </select>
            
            <br> Ethnic Background <br>
            <select name="ethnicity" type="ethnicity" class="ethnicity">
            <option value="Select">Select</option>
            <option value="White">White</option>
            <option value="Native American">Native American</option>
            <option value="Asian">Asian</option>
            <option value="Hispanic">Hispanic</option>
            <option value="African American-Black">African American-Black</option>
            <option value="Multi or Biracial">Multi or Biracial</option>
            </select>
            
            <br> Marital Status <br>
            <select name="maritalstatus" type="maritalstatus" class="maritalstatus">
            <option value="Select">Select</option>
            <option value="Never Married">Never Married</option>
            <option value="Married">Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Live with significant other">Live with significant other</option>
            <option value="widowed or widower">widowed or widower</option>
            <option value="Separated">Separated</option>
            <option value="Living with children at home">Living with children at home</option>    
            </select>
            
            <br> Education Level <br>
            <select name="education" type="education" class="education">
            <option value="Select">Select</option>
            <option value="Some Highschool">Some Highschool</option>
            <option value="Highschool Graduate">Highschool Graduate</option>
            <option value="Some college">Some college</option>
            <option value="College Graduate">College Graduate</option>
            <option value="Masters">Masters</option>
            <option value="Doctorate">Doctorate</option>
            </select>
			
			<button>Register</button>
			</form>
        </div>
    </div>
