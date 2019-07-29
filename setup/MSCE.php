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
$sql = "SELECT * FROM `MSCE` ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
		<td> ' . $row["Name"].'</td>
		<td>
		
		 <div class="form-group">
 
  <select name="'.$row["Name"].'" class="form-control" id="sel1">
 <option placeholder="Grade">. . .</option>   <option>1</option>    <option>2</option>    <option>3</option>    <option>4</option>	option>5</option> 	<option>6</option> 	<option>7</option>  	<option>8</option>  	<option>9</option>  </select>
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