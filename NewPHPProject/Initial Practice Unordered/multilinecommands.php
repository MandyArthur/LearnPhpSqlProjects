<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php

       $author = "Steve Ballmer"; 
        
        echo "Developers,Developers,Developers,Developers,Developers,Developers,Developers,
       Developers,Developers,Developers,Developers,Developers,Developers,Developers!
                - $author"; 
      echo"<br>"; 
      
$author2 = "Bill Gates";

$text = "Measuring programming progress by lines of code is like 
                Measuring aircraft building progress by weight.
                - $author2."; 
echo $text;

 echo"<br>"; 

$author3 = "Brian W. Kernighan"; 

echo <<<_END
Debugging is wice as hard as writing the code in the first place .
Therefore, if you write the code as cleverly as possible, your are, 
by definition, not smart enough to debug it. 
- $author3.
_END
        
        
?>

    </body>
</html>
