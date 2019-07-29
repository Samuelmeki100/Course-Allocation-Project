<?php include"../PHP.php"; ?>
<div id="displayinfor">

<form method="post" name="Personalform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<div class="form-group">
  <label for="usr">surname: </label>
  <input type="text" class="form-control" name="surname" id="surname" required />
</div>

<div class="form-group">
  <label for="usr">First name:</label>
  <input type="text" class="form-control" name="Firstname" id="Firstname" required />
</div>

<div class="form-group">
  <label for="usr">Date of Birth:</label>
  <input type="text" placeholder="Year/Month/Day" name="DOB" class="form-control" id="DOB">
</div>

<div class="form-group">
  <label for="usr">Gender:</label>
 
<div class="radio">
<label><input type="radio"  name="Gender" id="Gender" value="female" required />Female</label>
</div>

<div class="radio">
<label><input type="radio" name="Gender" id="Gender" value="Male" required />Male</label>
</div>
</div>

<div class="form-group">
  <label for="usr">Contact Address:</label>
  <input type="text" class="form-control" name="ContactAddress" id="ContactAddress" required />
</div>

<div class="form-group">
  <label for="usr">Mobile:</label>
  <input type="text" placeholder="(+)265" name="Mobile" class="form-control" id="Mobile" required />
</div>

<div class="form-group">
  <label for="usr">Email:</label>
  <input Name="Email" type="Email" class="form-control" id="Email" required />
</div>

	
<div>
<input href="#" type="submit" Name="PP" value="Next"  id="next" style="margin-top: 30px;" class="btn btn-primary btn-md">
<div id="txtHint"></div>
</div> 
</form>
<?php
if(ISSET($_POST['PP'])){
	PP();
}


?>