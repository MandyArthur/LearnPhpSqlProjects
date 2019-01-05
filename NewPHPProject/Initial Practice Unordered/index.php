<!DOCTYPE html>
<html>
    <head> <title>My PHP practice timeline</title> </head>
<body>
    <h1> My PHP Journey </h1>
    <p> Ever since I had a vague idea of what PHP and MySQL does, I've known that I'd use it in projects. 
        There is just so much that can be done to websites with these languages and so the only thing stopping 
        you from making a great website, is you!</P>
    
    <h1>FAQ's</h1>
    <ol>
<li>
    <h4> Why are you recording your PHP journey?</h4>
    <p> Mostly because I am still at a stage where I'm not sure what employers want to see in terms of 'experience'. 
        But really because I want to chart my progress and in a years' time, I think I would be so proud
        of how far I have come from this day. </p>
</li>

<li> <h4>What IDE are you using? </h4>
    <p>Netbeans and I constantly need to remind myself to view this page <a href="http://localhost/NewPHPProject/practice.php">here </a></p>
</li>

<li> <h4> What can you do with PHP? </h4>
    <p>According to <a href = "https://www.w3schools.com/php/php_intro.asp">W3Schools</a>, PHP can generate dynamic page content, can create, open, read, write, delete, and close files on the server, can collect form data, can send and receive cookies, can add, delete, modify data in your database, can be used to control user-access,  can encrypt databank
    </p>   
</li>

</ol>
    
    <h1>Timeline</h1> 
    <h2>22nd March 2018</h2>
<?php
echo "My first PHP script!";
 
?>
    <p>Well technically this isn't my first because I had made a start reading 'Learning PHP, MySQL & 
        JavaScript, 4th Edition With jQuery, CSS & HTML5'. Good book! But for the sake of starting somewhere 
        on the timeline, let's say this is my first PHP script. </p>

<?php
// This is a single-line comment

# This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;
?>
    
    <p> That's not gonna make a lot of sense to you unless you knew that my actual code looked like Figure 1.1. 
        <br>
        <img src ='code1.png'>
        <br>Figure 1.1</p>
<?php

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$a = 5;
$b = 4;

echo "This ", "string ", "was ", "made ", "with multiple parameters.";
echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $a + $b;

echo '<br>';

print "<h2>These are print statements:</h2> PHP is Fun!";
print "This statement has a break at the end of it. <br>";
print "I'm about to learn PHP!";

echo '<br>';

?>
<h4>PHP Data Types</h4>

<?php 

$c = 5985;
$text3 = "An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647."; 
var_dump($c);
echo "Definition: .$text3.";

echo "<br>";
$text4 = "A float (floating point number) is a number with a decimal point or a number in exponential form."; 
$d = 10.365;
var_dump($d);
echo "Definition: .$text4.";

echo "<br>";

$icecream = array("Clotted Cream","Strawberry","Butterscotch", "Habernero");
var_dump($icecream);


echo "<br>";

$text5 = "An object is a data type which stores data and information on how to process that data.";
echo "Definition: .$text5.";

class Icecream {
    function Icecream() {
        $this->flavour = "Mango";
    }
}
// create an object
$summer = new Icecream();

// show object properties
echo $summer->flavour;

echo "<br>";

?>
<p> <img src ='code 2.png'>
        <br>Figure 2.1</p>

<?php
echo "Length of string - Hello world is ";
echo strlen("Hello world!"); // outputs 12
echo "<br>";
echo "Number of words in - Hello world is ";
echo str_word_count("Hello world!"); 
echo "<br>";
echo "Reverse - Hello world is ";
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";
echo "Length of World in - Hello world is ";
echo strpos("Hello world!", "world"); // outputs 6
echo "<br>";
echo "Length of blueberries in - Hello world is ";
echo strpos("Hello world!", "blueberries"); // outputs FALSE
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo "<br>";
?>
<h4>Defining strings</h4>
<?php
// not case-sensitive constant name
define("GREETING", "Welcome to my website!", true);
echo GrEeTiNg;
?> 


    <h2>23rd March 2018</h2>
    <h4>PHP Constants & Function - Basic </h4>
    
<?php
    define("Loves", "PHP rules!", true);
    
    function myTest() {
    echo Loves;
    }
 
    myTest();
    
?>
  <p>Operators are used to perform operations on variables and values.</p>
    
    <h5>Area of a trapezium</h5>
    
    <img src="areaofatrapezium.png">
    
    <?php
    $f = 10;  
    $g = 6;
    $h = 7;
    echo "<br>";
    echo "If a = $f cm and b = $g cm and h= $h cm";
    echo "<br>";
    echo "Then the area is "; 
    echo (($f + $g)*$h)/2;
    echo 'cm squared';
    echo "<br>";
    echo "Slant height is = ";
    $i = (($f-$g)/2);
    $j = ($i**2)+($h**2); 
    $l = sqrt($j) ;
    echo "$l cms";
    echo "<br>";
    ?>
    <img src="code 3.png" alt="Code 3"> <p>Figure 3.1</p>
    <p>I absolutely loved doing this mini project! Turning maths into code so it's less daunting! 
    This is my kind of 'Mental' Arithmetic! Agree with me? Follow me on Snapchat or get in touch via my blog
    or Codepen! I want to hear all about your obsession with the applications of code.</p>
    
    <p>To view my working out and code, view Figure 3.1 below. </p>
    
     <h4>If...else...elseif Statements</h4>
    
    <?php
    $m = date("H");

    if ($m < "10") {
        echo "Have a good morning!Come back to this page and check at 12:01";
    } elseif ($m > "12") {
        echo "Have a good afternoon!Come back at check this line out at 19:00";
    } elseif ($m > "18") {
        echo "Have a good evening";
    } else {
        echo "Have a good night!";
      
    }
    echo "<br>";
    ?>  
     
     <img src="code 4.png" alt="Code 4"> <p>Figure 3.1</p>
     
     <h4>Switch Statements</h4>
     
     <?php
$favcar = "Bugatti Type 41 Royale";

switch ($favcar) {
    case "Bugatti Type 35":
        echo "Your favorite car is the Bugatti Type 35!";
        echo "<br>";
        echo '<img src="Bugatti Type 35.png" alt="Bugatti Type 35" />';
        echo "<br>";
        echo "The Type 35 is one of the purest cars ever built for Grand Prix racing, the precursor to Formula One.
                With over 2,000 victories and podium finishes, the Type 35 is also the most successful race car in 
                automobile history. Beginning in the 1920s, it won all of the most important races for more than 
                ten years, including five consecutive victories at the Targa Florio which, at the time, 
                was considered the world’s most challenging open road race."; 
        break;
    case "Bugatti Type 41 Royale":
        echo "Your favorite car is the Bugatti Type 41 Royale!";
        echo "<br>";
        echo '<img src="Bugatti Type 41 Royale.png" alt="Bugatti Type 41 Royale" />';
        echo "<br>";
        echo '“The Type 41 Royale was to be the most exclusive, impressive and luxurious
        automobile of its time," Anscheidt says. "In proportion, it is an astounding land
                yacht on wheels, designed for the royal automotive appearance of Kings and Queens.”';
        break;
    case "Bugatti Chiron":
        echo "Your favorite color is Bugatti Chiron!";
        echo "<br>";
        echo '<img src="Bugatti Chiron.png" alt="Bugatti Chiron" />';
        echo "<br>";
        echo 'Both for our customers and for us as designers, it is important for a Bugatti to have a 
        certain stylistic longevity so that it is still perceived as precious in 10 or even 50 years';
        break;
    default:
        echo "Your favorite car is not the Bugatti Chiron, Bugatti Type 41 Royale or Bugatti Type 35! 
            What's your favorite car?";
}
?>
     
     <h4>While Loops</h4>
     
     <h5>While Loops</h5>
     <?php  
$o = 1;
 
while($o <= 5) {
  echo "The number is: $o <br>";
  $o++;
} 
?> 
     
     <h5>Do while </h5>
     <?php 
       $p = 6;

       do {
           echo "The number is: $p <br>";
           $p++;
       } while ($p <= 10);
       ?>
     
     <h5>For loop</h5>
     <?php  
        $heroes = array("SuperMan", "BatMan", "MartianManHunter", "HawkGirl"); 

        foreach ($heroes as $value) {
        echo "$value <br>";
        }
        ?>
     <h5> User defined Function</h5>
    <?php
   function writeMsg() {
       echo "This seems familiar!";
        }

   writeMsg(); // call the function
   ?>
     
     <h5>Function Arguments</h5>
     
     <?php
function familyName($fname) {
    echo "$fname Addams.<br>";
}

familyName("Morticia");
familyName("Gomez");
familyName("Uncle Fester");
familyName("Pugsley");
familyName("Wednesday");
familyName("Grandmama");
familyName("The Thing");
  echo "<br>";
echo 'Can you guess who is missing? ';
?>

     <h5>Default Argument</h5> 
     
     
        <?php
        function setHeight($minheight = 0.50) {
            echo "The family heights are : $minheight mts <br>";
        }

        setHeight(3.5);
        setHeight();
        setHeight(1.35);
        setHeight(0.80);
        ?>
     
     <h5>Arrays</h5>
     
     <?php
        $skills = array("HTML", "CSS", "PHP", "JavaScript", "Java", "SQL","Sales", "Networking"); 
        echo "My main skills are " . $skills[0] . ", " . $skills[1] . " and " . $skills[2] . ".";
        echo "<br>";
        echo "Number of listed skills:" .count($skills);
     ?>
     <h5>Loop Through an Indexed Array</h5>
     <?php
      $skills = array("HTML", "CSS", "PHP", "JavaScript", "Java", "SQL","Sales", "Networking"); 
        $arrlength = count($skills);

        for($q = 0; $q < $arrlength; $q++) {
            echo $skills[$q];
            echo "<br>";
}
?>
     <h5>Associative Arrays</h5>
     
     <?php
        $exp = array("HTML"=>"11", "CSS"=>"10", "JavaScript"=>"9");
        echo "I have been using HTML for " . $exp['HTML'] . " months, today (25th March 2018)";
        echo "<br>";
        foreach($exp as $r => $r_value) {
    echo "Key=" . $r . ", Value=" . $r_value;
    echo "<br>";
}
        ?>
     
     <h5> Sort Array in Ascending Order - sort()</h5>
     
     <?php
        $skills = array("HTML", "CSS", "PHP", "JavaScript", "Java", "SQL","Sales", "Networking"); 
        sort($skills);

        $slength = count($skills);
        for($s = 0; $s < $slength; $s++) {
            echo $skills[$s];
            echo "<br>";
}
?>

     <h5>Sorting numbers in an Array</h5>
     <?php
        $numero = array(4, 6, 2, 22, 11);
        sort($numero);

        $arrlength = count($numero);
        for($t = 0; $t < $arrlength; $t++) {
            echo $numero[$t];
            echo "<br>";
        }
    ?>
     <h5>Sort Array in Descending Order - rsort()</h5>
     
     <?php
        $skills = array("HTML", "CSS", "PHP", "JavaScript", "Java", "SQL","Sales", "Networking"); 
        rsort($skills);

        $slength = count($skills);
        for($u = 0; $u < $slength; $u++) {
        echo $skills[$u];
        echo "<br>";
}
?>
     
     <h5>$GLOBALS is a PHP super global variable which is used to access global 
         variables from anywhere in the PHP script (also from within functions or methods)</h5>
      <?php 
       $x = 35;
       $y = 11.5; 

       function addition() {
           $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
       }

       addition();
       echo $z;
       ?>
     
     <h5> $_SERVER is a PHP super global variable which holds information 
         about headers, paths, and script locations.</h5>

        <?php 
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>";
         
        echo "<br>";
        echo $_SERVER['SERVER_SIGNATURE']; 
        ?>     
     
    <h2>29th March 2018</h2>
    <h4>PHP Forms</h4>
    
    
    <h2>30th March 2018</h2>
    <h4>PHP Advanced</h4>
    <h4>PHP Multidimensional Arrays</h4>
    
    
    <h2>31st March 2018</h2>
    <h4>PHP File Handling</h4>
    
    <h2>31st March 2018</h2>
    <h4>PHP Filters</h4>
    
    <h2>3rd April 2018</h2>
    <h4>MySQL DATABASE!!</h4>
    
    <h2>4th April 2018</h2>
    <h4>PHP XML</h4>
    
    <h2>5th April 2018</h2>
    <h4>PHP XML</h4>
    
    <h2>9th April 2018</h2>
    <h4>PHP XML</h4>
    
    
</body>
</html>