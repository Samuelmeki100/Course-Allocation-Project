<?php SESSION_START(); 
$cookie_name = "user";
$cookie_value = $_SESSION["USERNAME"] ;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if($cookie_value==""){header("location:index.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Course Allocation</title>
 
 <meta charset="utf-8">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/main.css"> 

  <link rel="stylesheet" href="css/font-awesome.min.css"> 
  <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  
<style>
  
 /* Hide the link that should open and close the topnav on small screens */
	#mySidenav .icon{
		display: none;
		}
	  
/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
	@media screen and (max-width: 600px) {
	  #mySidenav a:not(:first-child) {display: none;}
	  #mySidenav div{ display:none; }
	  #mySidenav{width: 71px; position:static; width:100%;height:auto; }
	  #mySidenav a.icon {
		float: left;
		display: block;
	  }
	}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
	@media screen and (max-width: 600px) {
	  #mySidenav.responsive {position: relative;}
	  #mySidenav.responsive a.icon {
		position: absolute;
		right: 0;
		top: 0;
	  }
	  #main{margin-Left:0px;}
	  #mySidenav.responsive a {
		float: none;
		display: block;
		text-align: left;
	  }
	}
  
</style>
 
  
</head>

<script type="text/javaScript">

 
</script>
 
<body onload="openNav()">
<div id="mySidenav" style="/*padding-top: 20px;*/" class="sidenav">
<div style="margin-left:30px;">
  <span style="margin:17px">
 <img  src="images/avatar2.png" style="width: 46px;border-radius: 66px;border: none;"><label style="margin-left:10px;font-size:0.8em;" >User:<br> <span id="output"></span></label></span><br><label onclick="end()" onmouseover="$(this).css('background-color': 'red')" onmouseout="$(this).css('background-color','rgb(231, 231, 231)')" style="margin:9px;"><form  ><input style="cursor: pointer;" type="submit" name="Logout" value="Logout"/></form><?PHP  if(isset($_GET["Logout"])){session_Destroy();setcookie("user", "", time() - 3600);echo"<meta http-equiv=Refresh content=0;url=index.php>";} ?></label>
 </div>
 <a class="icon"  href="javascript:void(0);"  onclick="myFunction()">&#9776;</a>
  <a id="personalP" href="#">personal Profile</a>
  <a id="edupro" href="#">Education Profile</a>
  <a href="#" onclick="Question()" >Take Aptitude</a>
  
 <!--  <a href="#"  >Take Aptitude</a> */-->
</div>
<div id="main">

<div style="background: linear-gradient(-135deg, #c3adc2, #5e9690);" class="jumbotron text-center">



  <h1 onmouseover="this.innerHTML = 'Home'" onmouseout="this.innerHTML='Course Allocation'">Course Allocation<i class="fa fa-graduation-cap" style="font-size:24px" > </i></h1>
  <p>find you course with easi with this system</p> 
     <div style="background-color:  burlywood; right: 32px; opacity: 0.9;position: relative; top: 64px;" id="myProgress">
  <div id="myBar"></div>
</div>
</div>


<div class="container">

<div class="row">
	<div class="col-sm-4">
		 <iframe src="scrollball.html" style="width: 300%;height: 386px;">
		 
		 </iframe> 
	</div>
</div>

  <div class="row">
    <div class="col-sm-4"><a href="#" >
      <h3>1st Create Your Account</h3>
      <p>if your seeing this you have created your account  ...</p>
      <p>your on  your way,just two more steps to go ...</p>
    </div></a>
    <div class="col-sm-4">
      <h3>2nd Complite Your Profile</h3>
      <p>its pretty simple,We just want to know you a little better</p>
      <p>All we want is a little information about you...</p>
    </div>
    <div class="col-sm-4">
      <h3>Lastly Take your Apptitude Test</h3>        
      <p>its just a simple listof questions ...</p>
      <p>this test will help you choose a course of your liking and one suitable for you...</p>
    </div>
	<div id="load" class="col-sm-4">
	
	</div>
	
  </div>
</div>
<div>


<script src="js/main.js"></script>
<script src="js/insert.js"></script>
<?php if(EMPTY($_SESSION["ID"])){header("location:index.php"); } ?>
<script>

function openNav() {
	/*.openmySidenav{width:350px;}
	.openmain{margin-Left:250px;}
	.openopenNav{width:0px;}*/

	$("main").addClass("openmain");
	$("mySidenav").addClass("openmySidenav");
	
	$("openNav").addClass("openopenNav");
	
    document.getElementById("mSidenav").style.width = "250px";
   document.getElementById("main").style.marginLeft = "250px";
	document.getElementById("openNav").style.width="0px";
}

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("mySidenav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
document.getElementById("output").innerHTML =getCookie("user");

</script>
</body>
</html>
