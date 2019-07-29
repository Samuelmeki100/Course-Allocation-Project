<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "course allocation project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `surname`, `firstname`, `DOB`, `Gender`, `contact adress`, `model`, `Email` FROM `student` WHERE `id`='".$_COOKIE['ID']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<div style='width:135%;'><div style='width:60%;box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);' > <img src=images/".$row["Gender"].".png ALT='avater' style='width:100%'>"."<div style='padding:0.01em 16px;' ><h4>". $row["surname"].' '.$row["firstname"]."</h4>".'<p> DOB: '.$row["DOB"].'<BR> Contact Adress: '.$row["contact adress"] .'<br> Phone Number : '.      $row["model"] .'<br> Email: '.      $row["Email"]."</p></div></div></div>";
    }
} else {
    echo "0";
}
$conn->close();
?> 
