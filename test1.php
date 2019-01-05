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
        $username = "Fred smith"; 
        echo $username; 
        echo "<br>"; 
        $current_user = $username; 
        echo $current_user; 
        echo "<br>";
        
        $team = array('Dill', 'Thyme', 'Rosemary','basil', 'Oregano'); 
        echo $team[2]; 
        echo "<br>";
        
        $oxo = array(array('x', '','o'), 
                     array('o','o','x'), 
                     array('x','o','')); 
        echo $oxo[1][2]; 
        echo "<br>";
        
          ?>
    </body>
</html>
