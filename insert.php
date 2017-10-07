<html lang="en-US">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Insert Page</title>
	<link rel="stylesheet" href="home.css">
	<h2>Form</h2>
</head>
<body>
<nav class="navigation">
<a href="database.php">Home Page</a> |
<a href="insert.html">Insert</a> |
<a href="login.html">Login</a> |
</nav>
<br>
<br>
<div class="form">
<form name="add_request" action="database.php" method="post">
<section id="body">
Employee Name:
<input id="field1" type="text" name="name" placeholder=" name" autocomplete="on" required=" " ><br><br>
Gender:<br>
 <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br> <br>                                                    
Birthday:
<input type="date" name="bday"><br><br>
Address:
<input id="field2" type="text" name="add"><br><br>
City:
<input id="field3" type="text" name="city"><br><br>
Province:
<input id="field4" type="text" name="province"><br><br>
Postal Code:
<input id="field5" type="text" name="pocode"><br><br>
Email:
<input type="email" name="email"><br><br>
Weblink:
<input id="field6" type="url" name="link"><br><br>
Join Date:
<input id="field7" type="date" name="jdate"><br><br>
Basic Pay:
<input id="field8" type="number" name="basicpay"><br><br>
<input type="button" name="submit" value="Submit">
</div>
</section>

<?php 
$id = $_POST['empid'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$dob = $_POST['txtdate'];
$address = $_POST['add'];
$city = $_POST['city'];
$province = $_POST['province'];
$pocode = $_POST['pocode'];
$email = $_POST['email'];
$link = $_POST['link'];
$jdate = $_POST['jdate'];
$pay = $_POST['basicpay'];



mysqli_query($conn,"INSERT INTO Employee_Masters (name, geder, bdate,address,city,province,pocode,email,website,joindate,basicpay)
		        VALUES ('$name','$gender','$dob','$address','$city','$province','$pocode','$email','$link','$jdate','$pay')");

if(mysqli_affected_rows($conn) > 0){
   alert( "<p>Employee Added</p>");
    echo "<a href=insert.php>Go Back</a>";
} else {
    echo "Employee NOT Added<br />";
    echo mysqli_error ($conn);
}
?>
<!--<script type="text/javascript">
function insert(){
	$id = $_POST['empid'];
	$name = trim($_POST['name']);
	$gender = trim($_POST['gender']);
	$dob = trim($_POST['txtdate']);
	$address = trim($_POST['add']);
	$city = trim($_POST['city']);
	$province = trim($_POST['province']);
	$pocode = trim($_POST['pocode']);
	$email = trim($_POST['email']);
	$link = trim($_POST['link']);
	$jdate = trim($_POST['jdate']);
	$pay = trim($_POST['pay']);
}
</script>-->

</body>
</html>