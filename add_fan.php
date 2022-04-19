<?php

include_once 'db.php';

$fan = $_POST['fan'];
$author = $_POST['author'];
$mavzu = $_POST['mavzu'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO fanlar (`author`, `title`, `count`)
    VALUES ('$author', '$fan', '$mavzu')";

if (mysqli_query($conn, $sql)) {
    header('Refresh: 0; URL=http://mirjalol/fanlar.php');
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>