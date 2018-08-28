<?php



$name = $_POST['name']; 
$student_email = $_POST['email']; 
$message = $_POST['message']; 

$email_from = 'missmatharthur@gmail.com'; 

$email_subject = "New enquiry"; 
$email_body = "Name: $name.\n".
                "Email: $student_email.\n".
                    "Message:$message.\n"; 

$to = "missmatharthur@gmail.com"; 

$headers = "From: $email_from \r\n"; 
$headers .= "Reply-To:$visitor-email \r\n"; 
mail($to, $email_subject, $email_body, $headers); 
header("Location: index.php")
?>

