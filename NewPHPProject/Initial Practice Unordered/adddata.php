<?php
  require_once 'login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
  
   $query2  = "INSERT INTO cats VALUES(NULL, 'Cougar', 'Growler', 2)";
  
    
  $result = $conn->query($query2);
  if (!$result) die ("Database access failed: " . $conn->error);
?>

