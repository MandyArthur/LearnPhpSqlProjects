<?php
include 'ch19_include.php';
if(!$_POST) {
	//haven't seen the form, so display it
	$display_block = <<<END_OF_BLOCK
	<form method="POST" action="$_SERVER[PHP_SELF]">
	<p><label for="subject">Subject:</label><br/>
	<input type="text" id="subject" name="subject" size="40" /></p>
	<p><label for="message">Mail Body:</label><br/>
	<textarea id="message" name="message" cols="50" rows="10"></textarea></p>
	<button type="submit" name="submit" value="submit">Submit</button>
	</form>
                
END_OF_BLOCK;
} else if ($_POST) {
    //want to send form, so check for required fields
    if (($_POST['subject']=="")|| ($_POST['message'] == " ")){
        header("Location: sendmyemail.php"); 
        exit; 
    }
    
    //connect to DB
    doDB(); 
    if (mysqli_connect_errno()){
        //if conn fails, stop script execution 
        printf("Connect failed: %s\n", mysqli_connect_error()); 
        exit(); 
    } else {
        //otherwise get email from address list 
        $sql = "SELECT email FROM subscribers"; 
        $result = mysqli_query($mysqli, $sql)
                    or die(mysqli_eror($mysqli)); 
        
        // Create a From: mailheader 
        $mailheaders = "From: Your Mailing list
                <mandyaarthur@gmail.com>"; 
        //loop through results and send mail 
        while ($row = mysqli_fetch_array($result)) {
            set_time_limit(0); 
        $email = $row['email'];
			mail("$email", stripslashes($_POST['subject']), stripslashes($_POST['message']), $mailheaders);
			$display_block .= "newsletter sent to: ".$email."<br/>";
           }               
        mysqli_free_result($result); 
        mysqli_close($mysqli); 
    }
     
}

?>
<!DOCTYPE html> 
<html>
    <head>
        <title>Sending a newsletter</title>
    </head>
    <body>
        <h1> Newsletter </h1>
        <?php echo $display_block; ?>
    </body>
</html>
