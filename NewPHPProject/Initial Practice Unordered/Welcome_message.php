<html>
<body>

Welcome <?php echo $_GET["name"]; ?>,<br>
Your email address is: <?php echo $_GET["email"]; ?>


<?php
// define variables and set to empty values
$name = $email = $position = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $position = test_input($_POST["position"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</body>
</html>
