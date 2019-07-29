<?php 
SESSION_START();

FUNCTION ED(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Course Allocation Project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT  `id` FROM `student` WHERE `id`=".$_SESSION["ID"]."";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
        $studentID=$row["id"];
		
	 $sql = "INSERT INTO `stundent educational profile`(`studentID`, `gradution year`, `1best`, `2best`, `3best`, `4best`, `5best`, `6best`,`school`) VALUES ('".$studentID."','".$_POST['year']."','".$_POST['1best']."','".$_POST['2best']."','".$_POST['3best']."','".$_POST['4best']."','".$_POST['5best']."','".$_POST['6best']."','".$_POST['school']."')";

		if (mysqli_query($conn, $sql)) {
			 header("location:../home.php");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	
		
    }
} else {
    echo "please fill you 'personal Profile' first ";
}



mysqli_close($conn);
}

FUNCTION PP(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Course Allocation Project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 $sql = "SELECT id from student where id='".$_SESSION["ID"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo"<script>alert('You Have already  Filled your details')</script>";
    }
} else {
   


 $sql = "INSERT INTO `student`( `id` ,`surname`, `firstname`, `DOB`, `Gender`, `contact adress`, `model`, `Email`) VALUES ('".$_SESSION["ID"]."','".$_POST['surname']."','".$_POST['Firstname']."','".$_POST['DOB']."','".$_POST['Gender']."','".$_POST['ContactAddress']."','".$_POST['Mobile']."','".$_POST['Email']."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:../home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
	
}


FUNCTION LOGIN(){
	/* connection to Database*/
 $CONN=NEW MYSQLI("localhost","root","","Course Allocation project") OR DIE("<span STYLE='COLOR:#c80000;'>THEY IS AN ERROR CONNCTING TO THE DATABASE! <br> CONTACT SYSTEM ADMIN FOR SISTANCE.</Span>");
	
	$EMAIL=$_POST['email'];$PASSWORD=$_POST['pass'];
	
	$SQL="SELECT `ID`, `User Name`, `Email` FROM `User` WHERE `Email`='".$EMAIL."' AND `Password`='".$PASSWORD."'";
	$result = $CONN->query($SQL);
	
	if ($CONN->query($SQL) == TRUE) {
    
} else {
    echo "Error1: " . $SQL . "<br>" . $CONN->error;
}


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<divonload='alart()>'id: " . $row["ID"]. "</div> - Name: " . $row["Email"]. " " . $row["User Name"]. "<br>";
		$_SESSION["USERNAME"] = $row["Email"];
		$_SESSION["ID"] = $row["ID"];
		setcookie("ID",$row["ID"], time() + (86400 * 30), "/");
		header("location:home.php");
    }
} else {
    INVALIDE();
}
$CONN->close();
	
	
}

FUNCTION REGISTRATION(){
	/* connection to Database*/
 $CONN=NEW MYSQLI("localhost","root","","Course Allocation project") OR DIE("<span STYLE='COLOR:#c80000;'>THEY IS AN ERROR CONNCTING TO THE DATABASE! <br> CONTACT SYSTEM ADMIN FOR SISTANCE.</Span>");
 
	$UserN=$_POST['Use'];$EMAIL=$_POST['email'];$Pass=$_POST['com_password'];
	
	$SQL = "INSERT INTO `user`( `User Name`, `Email`, `Password`) VALUES ('$UserN','$EMAIL','$Pass')";

if ($CONN->query($SQL) === TRUE) {
    echo "New account created successfully";
	header("location:index.php");
} else {
    echo "Error: " . $SQL . "<br>" . $CONN->error;
}

$CONN->close();
	
}

FUNCTION DETAILS(){
	/* connection to Database*/
 $CONN=NEW MYSQLI("localhost","root","","Course Allocation project") OR DIE("<span STYLE='COLOR:#c80000;'>THEY IS AN ERROR CONNCTING TO THE DATABASE! <br> CONTACT SYSTEM ADMIN FOR SISTANCE.</Span>");
	
}

FUNCTION APPTITUDE(){
	/* connection to Database*/
 $CONN=NEW MYSQLI("localhost","root","","Course Allocation project") OR DIE("<span STYLE='COLOR:#c80000;'>THEY IS AN ERROR CONNCTING TO THE DATABASE! <br> CONTACT SYSTEM ADMIN FOR ASSISTANCE.</Span>");
 
}
FUNCTION SUBJECTS(){

 
	
}

FUNCTION INVALIDE(){
	ECHO'
	<HTML>
	<HEAD>
	<style>
	</style>
	</HEAD>
	<body onload="$(this).fateIn("slow")" style="align-content: center;width:100%;" onload="openNav1()">
	<center>
	<div  onclick="$(this).hide()" style="opacity: 0.9;width: 100%;background-color: black;position: fixed;z-index: 1;top: 6%;height: 83%;top: ;left: ;padding: 36px;left: 0.3pc;"  id="overlay">

 
  <a href="javascript:void(0)" style="float:right;font-size: 36px;" onclick="$(this).hide()">&times;</a>

  <!-- Overlay content -->
  <div style="position: relative;top: 37%;width: 100%;text-align: center;margin-top: 3px;background-color: darkslategrey;padding: 5%;">
    <a href="#" style="color:white;" >"Invalide User Name/Password "</a>
   
  </div>

</div></center>
	<boby>
	</HTML>
	';
}













?>