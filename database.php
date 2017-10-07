<nav class="navigation">
<a href="database.php">Home Page</a> |
<a href="insert.php">Insert</a> |
<a href="login.html">Login</a> |

</nav>
<?php

//require_once 'homepage.php';

echo "<br><br>";
echo "<h2>Employee Data</h2>";
$servername = "localhost";
$username= "root";
$password = "";
$db = "paySlipRoll";
//header("Location: database.php");

// Create connection
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("Connection Failed:" . $conn -> connect_error);
}else {
   // echo "Connection successfully";
}
$sql = "SELECT * FROM Employee_Masters";
$result = $conn->query($sql);

		
?>

<script>
function myFunction($id) {
    alert( "Hello World");
	$sql = "DELETE * FROM Employee_Masters WHERE empid='$id';";
	alert($sql);
	
	if(isset($_POST["id"]) && !empty($_POST["id"])){
	    // Include config file
	    require_once 'config.php';
	    
	    // Prepare a select statement
	    $sql = "DELETE FROM employees WHERE empid = ?";
	    
	    if($stmt = $mysqli->prepare($sql)){
	        // Bind variables to the prepared statement as parameters
	        $stmt->bind_param("i", $param_id);
	        
	        // Set parameters
	        $param_id = ($_POST["empid"]);
	        
	        // Attempt to execute the prepared statement
	        if($stmt->execute()){
	            // Records deleted successfully. Redirect to landing page
	            header("location: database.php");
	            exit();
	        } else{
	            echo "Oops! Something went wrong. Please try again later.";
	        }
	    }
			
}
</script>


<link rel="stylesheet" href="home.css">
<style>
th {
    background-color: #00b386;
    color: white;
}                                                                                                                                                                                                                                                                                                                                   
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}
tr:nth-child(even){
background-color: #f2f2f2
}
</style>
<table border="1">
<tr>
<th>Employee Id</th>
<th>Employee Name</th>
<th>Gender</th>                                                               
<th>Birthday</th>
<th>Address</th>
<th>City</th>
<th>Province</th>
<th>Postal Code</th>
<th>Email</th>
<th>Weblink</th>
<th>Join Date</th>
<th>Basic Pay</th>
<th>Update</th>
<th>Delete</th>
<th>Pay Slip</th>
</tr>
<?php

	if ($result->num_rows > 0) {
    	// output data of each row
   	 while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        echo "<tr>";
		echo "<td>";
        	echo $row['empid'];
			$ID = $row['empid'];
        echo "</td>";
        echo "<td>";
        	echo $row['name'];
        echo "</td>";
        echo "<td>";
        echo $row['geder'];
        echo "</td>";
        echo "<td>";
        echo $row['bdate'];
        echo "</td>";
        echo "<td>";
        echo $row['address'];
        echo "</td>";
        echo "<td>";
        echo $row['city'];
        echo "</td>";
        echo "<td>";
        echo $row['province'];
        echo "</td>";
        echo "<td>";
        echo $row['pocode'];
        echo "</td>";
        echo "<td>";
        echo $row['email'];
        echo "</td>";
        echo "<td>";
        echo $row['website'];
        echo "</td>";
        echo "<td>";
        echo $row['joindate'];
        echo "</td>";
        echo "<td>";
        echo $row['basicpay'];
        echo "</td>";
		echo "<td>";
        echo "<input type='button' name='Update' value='Update' onclick=update()> ";
		echo "<td>";
        echo " <input type='button' name='Delete' value='Delete' onclick=myFunction()>  ";
        echo "</td>";
		echo "<td>";
        echo "<input type='button' name='Generate PaySlip' value='Payslip' onclick=payslip()> ";
		echo "<td>";
        echo "</td>";
        echo "</tr>";
        
    }
	} else {
   	 echo "0 results";
	}
	
	echo "</table>";
			
	//$stmt->close();
	$conn->close();
?>
</table>

