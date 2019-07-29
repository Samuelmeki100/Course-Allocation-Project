<?PHP
SESSION_START();
$_SESSION['ID'];
 $conn=NEW MYSQLI("localhost","root","","Course Allocation project") OR DIE("<span STYLE='COLOR:#c80000;'>THEY IS AN ERROR CONNCTING TO THE DATABASE! <br> CONTACT SYSTEM ADMIN FOR SISTANCE.</Span>");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  `1best`FROM `stundent educational profile` WHERE `studentID`=".$_SESSION['ID']."";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
 			
					$sql = "SELECT id FROM `subjects` WHERE `name` LIKE '".$row["1best"]."'";
						$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
								while($row = $result->fetch_assoc()) {
									
									$sql = "SELECT `course` FROM `requeirdsubjectcourses` WHERE `SubjectID`='".$row["id"]."'";
								$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									
$sql = "SELECT * FROM `course` where id=".$row["course"]."";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<strong>name:</strong><br><a href='#'> " . $row["name"]. " <br><strong> details:</strong><br> " . $row["details"]. " <br> <strong>duration:</strong><br> " . $row["duration"]. " Years</a><br>";
    }
} else {
    echo "0 results";
}
									
								}
							}else {
								echo "Your courses were not found";
							}
							
						}
					}else {
						echo "Your subjects were not found";
					}
		
    }
} else {
    echo "Please Complete your student educational profile then try again ";
}
$conn->close();
?>