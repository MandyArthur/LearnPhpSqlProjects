<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Calculator using PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form>
            <input type="text" name="number1" placeholder="Number 1">
            <input type="text" name="number2" placeholder="Number 2">
            <select name="operator">
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
                               
            </select>
            <br>
            <button name="submit" value="submit" type="submit">Calculate </button>
        </form>
        <p>The answer is: </p>
        
        <?php
        if (isset($_GET['submit'])){
        $result1 = $_GET['number1']; 
        $result2 = $_GET['number2']; 
        $operator = $_GET['operator']; 
        
        switch ($operator) {
        
        case "None":
            echo "Need to select an operator!"; 
            break; 
        
        case "Add":
            echo $result1 + $result2; 
            break; 
            
        
        case "Subtract":
            echo $result1 - $result2; 
            break; 
            
            
         
        case "Multiply":
            echo $result1 & $result2; 
            break; 
            
            
        
        case "Divide":
          echo $result1 / $result2; 
            break; 
        }
        }
        ?>
    </body>
</html>
