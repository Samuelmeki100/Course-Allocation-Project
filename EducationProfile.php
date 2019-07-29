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

$sql = "SELECT `gradution year`, `1best`, `2best`, `3best`, `4best`, `5best`, `6best`, `school` FROM `stundent educational profile` WHERE `studentID`='".$_COOKIE['ID']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
        echo "<div style='width:200%;box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);'>school: " . $row["school"]. "<br>gradution year " . $row["gradution year"]. " <br><h4>Best Subjects</h4> <br> (1) " . $row["1best"]. "<br> (2) " . $row["2best"]. "<br> (3) ". $row["3best"]."<br>(4) " .$row["4best"]. "<br> (5) " . $row["5best"]. "<br> (6) ". $row["6best"] ."<div>";
    }
} else {
    echo "0";
}
$conn->close();
?> 