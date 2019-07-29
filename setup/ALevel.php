 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Subject</th>
        <th>Grade</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        </td>
        <?php

$dbname = "myDB";

// Create connection
$conn = new mysqli("localhost","root", "", "course allocation project");
$sql = "SELECT * FROM `a lever`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
		<td> ' . $row["Name"].'</td>
		<td>
		
		 <div class="form-group">
 
<select  class="form-control" name="'.$row["Name"].'" id="sel1">
    <option>....</option>    <option>A</option>    <option>B</option>    <option>C</option>	option>D</option> 	<option>E</option> 	<option>F</option>  </select>
</div>
		</td>
		</tr>' ;
    }
} else {
    echo "0 results";
}

?>
        
      
    </tbody>
  </table>