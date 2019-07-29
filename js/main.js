function End(){
	$("h1").text("Recommended Courses");
	 $("#load").text("");
	  
	  $(".container .row .col-sm-4").hide();
	  
	   $("#load").load("endfile.php");
	   $(" #load").show("900000000");
	  
	  $("#myBar").css("background-color", "#00ff30");
		$("#myBar").animate({left: '250px',
        opacity: '0.5',
        height: '5px',
        width: '20%'
		});  
}
function roader(){
	
	$("h1").text("Recommended Courses");
	 $("#load").text("");
	  
	  $(".container .row .col-sm-4").hide();
	  
	   $("#load").load("getRecomandations.php");
	   $(" #load").show("900000000");
	  
	  $("#myBar").css("background-color", "#00ff30");
		$("#myBar").animate({left: '250px',
        opacity: '0.5',
        height: '5px',
        width: '20%'
		});  
}

function edpro(){
	if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }else{
				document.getElementById("txtHint").innerHTML="No results"
			}
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
	$("h1").text("Education Profile");
	 $("#load").text("");
	  $("h1").text("Education Profile");
	  $(".container .row .col-sm-4").hide();
	  
	   $("#load").load("setup/edupro.php");
	   $(" #load").show("900000000");
	  
	  $("#myBar").css("background-color", "#00ff30");
		$("#myBar").animate({left: '250px',
        opacity: '0.5',
        height: '5px',
        width: '20%'
		});
	
}

function Question(){
	 $(".container .row .col-sm-4").hide();
	 $("#load").text("");
	 $("h1").text(" Apptitude Questions");
	 
	 $("#load").load("Aptitude/Set1.txt");
	 
	$(" #load").show("9000000000");
	
	 $("#myBar").css("background-color", "#00ff30");
		$("#myBar").animate({left: '250px',
        opacity: '0.5',
        height: '5px',
        width: '60%'
		});
}

function MSCE(){	
		$("#table").text("");
	 	    
	   $("#table").load("setup/MSCE.php");
	   $(" #table").show("900000000");
}

function IGCSE(){
		$("#table").text("");
		$("#table").load("setup/IGCSE.php");
		   $(" #table").show("900000000");
}

function A_Levels(){
	$("#table").text("");
	$("#table").load("setup/ALevel.php");
	   $(" #table").show("9000000009");
}

function nextbtn(){
	
	$("#myBar").css("background-color", "#00ff30");
		$("#myBar").animate({left: '250px',
        opacity: '0.5',
        height: '5px',
        width: '60%'
		});
			 
	    
}




/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */


/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
} 

function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('com_password');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#C56A5B";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  




(function ($) {
    "use strict";

    
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }else if($("#pass").val()==$("#com_pass").val()){
		$(this).css("background-color", "#3cb371");
	}else {
		$(this).css("background-color", "#ff0000");
		return false;
	}
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    


})(jQuery);

$(document).ready(function(){
 
 $("#popup").hide();
$("button").click(function(){
  


  });
  
  $("#openNav").click(function(){$("#openNav").hide();});
  $("#closeNav").click(function(){$("#openNav").show();});
  
  $("#personalP").click(function(){
	   
	
    $.get("personalprofile.php", function(data, status){
		size = data.length;
		
        if( size == 4){
		
			  $("h1").text("Personal Profile");
				$(".container .row .col-sm-4").hide();
					$("#load").load("setup/head.php");
						$(" #load").show("900000000");
						
	  }  else{
		
			 
				  $("h1").text("Personal Profile");
					$(".container .row .col-sm-4").hide();
						$("#load").load("personalprofile.php").animate({left: '150px'});
							$(" #load").show("900000000");		
					  
	  }
    });

	  
	  
	   
	  });
	    
  $("#edupro").click(function(){
	  
	  $.get("EducationProfile.php", function(data, status){
		  size = data.length;
		  
//if data returns size 	is equel to 2 the student has not registerd yet	  
		  if(size == 2){
			  
			 $("#load").text("");
				$("h1").text("Education Profile");
					$(".container .row .col-sm-4").hide();
		  
						$("#load").load("setup/edupro.php");
							$(" #load").show("900000000"); 
			  
		  }else{
			$("#load").text("");
				$("h1").text("Education Profile");
					$(".container .row .col-sm-4").hide();
		  
						$("#load").load("EducationProfile.php");
							$(" #load").show("900000000");
			}
		});
  });
		  
	    
  $("h1").click(function(){
	  $("#load").text("");
	  $("h1").text("Course allocation");
	  $(".container .row .col-sm-4").show("900000000");
	  
	  
	   $("#load").hide();
	  
  });


});

