<html>
    <head><title>02032018</title> </head>
    <body>
<?php

$number = 1234*567; 
        echo substr($number,0,12); 
        
        echo"<br>"; 
        
        function longdate($timestamp) 
        {
            return date ("l F jS Y", $timestamp); 
            
        }
        echo longdate(time()); 
        echo"<br>"; 
        echo "The date 17 days ago was: "; 
        echo longdate(time() - 17*24*60*60); 
?>
</body>
</html>



