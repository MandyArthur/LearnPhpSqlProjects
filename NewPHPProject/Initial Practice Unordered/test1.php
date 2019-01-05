<!DOCTYPE html>
<html>
    <head> <title>My PHP practice timeline</title> </head>
<body>
    <h1> My PHP Journey </h1>
    
    <h1>Timeline</h1> 
    <h2>29nd March 2018</h2>
    
    <h4> PHP Forms </h4>
<?php

// define variables and set to empty values
$nameErr = $emailErr = $positionErr = $commentErr = $tobErr= "";
$name = $email = $position = $comment = $website = $tob= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
} else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }    
  }
  
  if (empty($_POST["comment"])) {
    $commentErr = "Please enter your message here";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["position"])) {
    $positionErr = "position is required";
  } else {
    $position = test_input($_POST["position"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>

<h2> Developer Hiring Form </h2>
<p><span class="error">* required field.</span></p>
<p> This form does send information to me, so feel free to contact me this way. </p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>"><span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Company Website: <input type="text" name="website" value="<?php echo $website;?>">
  <br><br>
   Type of role: <span class="error" >* <?php echo $positionErr;?></span>
  <input type="radio" name="position" <?php if (isset($position) && $position=="FTPerm") echo "checked";?> value="FTPerm">Full time Permanent
  <input type="radio" name="position" <?php if (isset($position) && $position=="Temp") echo "checked";?> value="Temp">Temporary/Freelance
  <input type="radio" name="position" <?php if (isset($position) && $position=="PBP") echo "checked";?> value="PBP">Pro Bono Publico (Eligibility criteria apply)
  <br><br>
  Brief: <span class="error">* </span><textarea name="comment" rows="5" cols="40"> <?php echo $comment;?></textarea>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "<b>Name: </b>"; 
echo $name;
echo "<br>";
echo "<b>Contact Email: </b>"; 
echo $email;
echo "<br>";
echo "<b>Business Website: </b>"; 
echo $website;
echo "<br>";
echo "<b>Type of role:</b>"; 
echo $position;
echo "<br>";
echo "<b>Brief Job detail: </b>"; 
echo $comment;
echo "<br>";

?>
    </body>
</html>
