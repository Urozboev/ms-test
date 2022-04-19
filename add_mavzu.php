<?php
session_start();
include_once 'db.php';

$fan_id = $_SESSION['fan_id'];
// $mavzu = $_POST['mavzu_1'];
$count = $_SESSION['count'];


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

for($i = 1; $i <= $count; $i++){
    $mavzu = $_POST["mavzu_$i"];
    $sql = "INSERT INTO mavzular (title, fan_id)
        VALUES ('$mavzu', '$fan_id');";
    if (mysqli_query($conn, $sql)) {
        
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

header('Refresh: 0; URL=http://mirjalol/fanlar.php');

// if (mysqli_multi_query($conn, $sql)) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
?>