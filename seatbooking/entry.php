        
        <?php
$servername = "localhost";
$username = "grant";
$password = "T1nk3rB377101po";
$dbname = "publications";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO movie (movie_theatre_id, movie_name, movie_times)
VALUES ('Room A', 'Night School', '2:00')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>