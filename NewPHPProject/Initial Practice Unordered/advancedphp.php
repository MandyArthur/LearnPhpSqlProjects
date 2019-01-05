
<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Amanda Arthur";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>


<html>
    <head> <title>My PHP practice timeline</title> </head>
    <body>
        <h1> My PHP Journey </h1>
        <h1>PHP Advanced</h1>

        <p> I was working on PHP form validation but for some reason, it keeps tripping and has started to peev 
            me off. So, like any normal person, I decided to take a look at the next step and hopefully come back to 
            PHP forms when I have a little more patience. </p>


        <?php
        $store = array
            (
            array("pop", 22, 18),
            array("coke", 15, 13),
            array("water", 5, 2),
            array("cheese", 17, 15)
        );

        echo $store[0][0] . ": In stock: " . $store[0][1] . ", sold: " . $store[0][2] . ".<br>";
        echo $store[1][0] . ": In stock: " . $store[1][1] . ", sold: " . $store[1][2] . ".<br>";
        echo $store[2][0] . ": In stock: " . $store[2][1] . ", sold: " . $store[2][2] . ".<br>";
        echo $store[3][0] . ": In stock: " . $store[3][1] . ", sold: " . $store[3][2] . ".<br>";
        ?>

        <h4> Ahhh! I just figured out why my forms weren't working! BRB</h4>

        <h2> 5th April, 2018</h2>

        <?php
        $cars = array
            (
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );

        for ($row = 0; $row < 4; $row++) {
            echo "<p><b>Vehicle ID $row</b></p>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
                echo "<li>" . $cars[$row][$col] . "</li>";
            }
            echo "</ul>";
        }
        ?>
        <h2>Times & Timezones</h2>
        <?php
        date_default_timezone_set("America/New_York");
        echo "The time is " . date("h:i:sa");
        ?>

        <h3>The example below creates a date and time from a number of parameters in the mktime() function</h3>
        <?php
        $a = mktime(11, 14, 54, 8, 12, 2014);
        echo "Created date is " . date("Y-m-d h:i:sa", $a);
        echo '<br>';
        ?>

        <h3>The PHP strtotime() function is used to convert a human readable string to a Unix time.</h3>
        <?php
        $b = strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("Y-m-d h:i:sa", $b);
        ?>
        <h3>Shows the next 6 Saturdays</h3>
        <?php
        $startdate = strtotime("Saturday");
        $enddate = strtotime("+6 weeks", $startdate);

        while ($startdate < $enddate) {
            echo date("M d", $startdate) . "<br>";
            $startdate = strtotime("+1 week", $startdate);
        }
        ?>

        <h3>How many days till Christmas?</h3>

        <?php
        $d1 = strtotime("Dec 25");
        $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
        echo "There are " . $d2 . " days until Christmas Eve.";
        echo '<br>';
        ?>

        <h2>PHP readfile() Function</h2>
        <p>The readfile() function is useful if all you want to do is open up a file and read its contents.</p>


        <?php
        echo readfile("toRead.txt");
        echo '<br>';
        echo '236 is the number of bytes read successfully.';
        ?>
        <h2>fopen()</h2>

        <?php
        echo '<br>';
        $myfile = fopen("toRead.txt", "r") or die("Unable to open file!");
        echo fread($myfile, filesize("toRead.txt"));
        fclose($myfile);
        echo '<br>';
        ?>
        <h2>Opening and Writing a file</h2> 
        <?php
        $alpha = fopen("newfile.txt", "w") or die("Unable to open file!");
        $alphatxt = "When we open an existing file for writing,\n";
        fwrite($alpha, $alphatxt);
        $betatxt = "all the existing data will be ERASED and we start with an empty file.\n";
        fwrite($alpha, $betatxt);
        fclose($alpha);
        ?>

        <?php
        $alpha = fopen("newfile.txt", "r") or die("Unable to open file!");
        echo fread($alpha, filesize("newfile.txt"));
        fclose($alpha);
        ?>

        <h2>PHP File Upload </h2>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>

        <h2>Cookies</h2>

        <p><strong>Note:</strong> The setcookie() function must appear BEFORE the 'html' tag.</p>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

    <p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

<?php
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
?>
    
</body>

<footer>
    
    &copy; 2010-<?php echo date("Y"); ?>
</footer>
</html>