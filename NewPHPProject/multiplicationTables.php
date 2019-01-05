<?php

$counter = 1; 

while($counter <= 12){
    echo $counter."times 2 is ".($counter * 2)."<br />"; 
    $counter++; 
}
?>
<?php
echo "<table style = \"border:1px solid #000;\">"; 
    for ($y = 1; $y<=12; $y++){
        echo "<tr>"; 
        for($x=1; $x<=12; $x++){
            echo "<td style= \"border:1px solid #000; width:25px;
                text-align:center;\">";
            echo ($x * $y); 
            echo "</td>";
        }
        echo "</tr>"; 
    }
    echo "</table>"; 
            
          
  ?>
    