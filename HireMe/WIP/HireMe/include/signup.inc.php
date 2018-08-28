 <?php
 
 include_once 'inc.php';
 
 $Name = $_POST['CompanyName']; 
 $Contact = $_POST['companyContact']; 
 $Email = $_POST['companyEmail']; 
 $Number = $_POST['companyNumber']; 

 
    $sql = "INSERT INTO phplessons(companyName,companyContact,companyEmail,companyNumber)
 VALUES ('$Name','$Contact','$Email','$Number' ); ";
    $result = mysqli_query($conn, $sql); 

    header("Location:../HireAmanda.php?signup=success"); 
    ?>
