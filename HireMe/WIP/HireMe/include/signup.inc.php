 <?php
 
 include_once 'inc.php';
 
 $name = mysqli_real_escape_string($conn,$_POST['companyName']); 
 $contact = mysqli_real_escape_string($conn,$_POST['companyContact']); 
 $email = mysqli_real_escape_string($conn,$_POST['companyEmail']);
 $number = mysqli_real_escape_string($conn,$_POST['companyNumber']); 

 
    $sql = "INSERT INTO contactdets(companyName,companyContact,companyEmail,companyNumber)
 VALUES ('$name','$contact','$email','$number' ); ";
    $result = mysqli_query($conn, $sql); 

    header("Location:../HireAmanda.php?signup=success"); 
    ?>
