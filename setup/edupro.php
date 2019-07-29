<?php include"../PHP.php"; ?>
<div id="displayinfor">

<form  Method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label onclick="MSCE()" id="MSCE" class="radio-inline"><input type="radio" name="optradio" required /> MSCE </label>
<label onclick="IGCSE()" id="IGCSE" class="radio-inline"><input type="radio" name="optradio" required /> IGCSE </label>
<label onclick="A_Levels()" id="A levels" class="radio-inline"><input type="radio" name="optradio" required /> A Levels </label> 

<div class="form-group">
  <label for="usr">school:</label>
  <input type="text" class="form-control" name='school' id="school" required />
</div>

<div class="form-group">
  <label for="usr">Year:</label>
  <input type="year" name="year" class="form-control" id="year" required />
</div>

<div style="width: 571px;" class="container">
  <h2>Academic Records</h2>
  <p>Enter your grades/points in this table (MSEC,IGCSE,A'levels).
 enter them from highest to lowest. Make sure to enter your real grades if you lie your school is at stake. </p>            
<div class="row">
			<div class="col-sm-4">
			
				 <div class="form-group">
			  <label id="fist" for="usr">First Subject:</label>
			  <input  type="text" class="form-control" id="year" name="1best" required />
				</div>
				
			</div>
		 
		 <div class="col-sm-4">
		 
			<div class="form-group">
			  <label for="usr">second Subject:</label>
			  <input id="sest" type="text" class="form-control" id="year" name="2best" required />
			</div>
		</div>
		
		<div class="col-sm-4">

			<div class="form-group">
			  <label for="usr">third Subject:</label>
			  <input id="thst" type="text" class="form-control" id="year" name="3best" required />
			</div>
		 </div>
	 </div>
	 
	 <div class="row">
		<div class="col-sm-4">	
			<div class="form-group">
			  <label for="usr">Fourth Subject:</label>
			  <input id="fost"  type="text" class="form-control" id="year" name="4best" required />
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
			  <label for="usr">fifth Subject:</label>
			  <input  type="text" class="form-control" id="year" name="5best" required />
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
			  <label id="sist" for="usr">Sixth Subject:</label>
			  <input type="text" class="form-control" id="year" name="6best" required />
			</div>
		</div>
	   </div>
  <input type="submit" name="Submit" value="Next" id="next" style="margin-top: 30px;" class="btn btn-primary btn-md">

</div>
</form>
</div>
<?php

 IF(ISSET($_POST["Submit"])){
	
	 ED();
 }


?>