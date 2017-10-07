<nav class="navigation">
<a href="database.php">Home Page</a> |
<a href="insert.php">Insert</a> |
<a href="login.html">Login</a> |

</nav>


<?php

$servername = "localhost";
$username= "root";
$password = "";
$db = "paySlipRoll";
//header("Location: home.html");

// Create connection
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("Connection Failed:" . $conn -> connect_error);
}else {
    echo "Connection successfully";
}

$sql = "CREATE TABLE Employee_Masters ("
        ."empid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,".
        "name VARCHAR(30) NOT NULL,".
        "geder VARCHAR(6) NOT NULL,".
        "bdate DATE NOT NULL,".
        "address VARCHAR(40) NOT NULL,".
        "city VARCHAR(20) NOT NULL,".
        "province VARCHAR(20) NOT NULL,".
        "pocode VARCHAR(10) NOT NULL,".
        "email VARCHAR(20) NOT NULL,".
        "website VARCHAR(50) NOT NULL,".
        "joindate TIMESTAMP NOT NULL,".
        "basicpay INT(20) NOT NULL)";
        
        if ($conn->query($sql) === TRUE) {
            echo "Table Employee_Master created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
       
       
        /*if ($conn->multi_query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            echo "Record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $sql = "SELECT * FROM Employee_Masters";
        $result = $conn->query($sql);
        echo "<br>Total Record :".mysqli_num_rows($result).".";
        if (mysqli_num_rows($result)>0){
            echo "<table border=1 <tr><th>Employee ID</th><th>Employee Name</th><th>Employee Gender</th><th>Employee BDate</th><th>Employee Add</th><th>Employee city</th><th>Employee Province</th><th>Employee Postal Code</th><th>Employee Email</th><th>Employee Website</th><th>Employee JoinDate</th><th>Employee Basic Pay</th></tr>";
            while ($row = mysqli_fetch_row($result)){
                echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td> ".$row[2]."</td><td> ".$row[3]."</td><td> ".$row[4]."</td><td> ".$row[5]."</td><td> ".$row[6]."</td><td> ".$row[7]."</td><td> ".$row[8]."</td><td> ".$row[9]."</td><td> ".$row[10]."</td><td> ".$row[11]."</td></tr>";
            }
            echo "</table>";
        }*/
        

$stmt = $conn->prepare("INSERT INTO Employee_Masters (name, geder, bdate,address,city,province,pocode,email,website,joindate,basicpay) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssi", $name,$geder,$bdate,$address,$city,$province,$pocode,$email,$website,$joindate,$basicpay);

// set parameters and execute

$name="Chaitali";
$geder="female";
$bdate="1992-11-07";
$address="1,Meadow place";
$city="Scarborough";
$province="Ontario";
$pocode="M1G2V5";
$email="chaitalip14@gmail.com";
$website="https://jsjsckl.sdhh.chhc-7262782783";
$joindate="2015-03-15";
$basicpay="15000000";
$stmt->execute();
echo "New records created successfully";

$name="Sumona";
$geder="female";
$bdate="1990-12-23";
$address="1,devani kund road";
$city="Scarborough";
$province="Ontario";
$pocode="M1S3D7";
$email="sumoinaf@yahoo.com";
$website="https://jsjsckl.sdhh.chhc-7262782783";
$joindate="2014-04-11";
$basicpay="1200000";
$stmt->execute();
echo "New records created successfully";

$name="Krishna";
$geder="female";
$bdate="1990-04-27";
$address="1,Markham-lawrence road";
$city="Scarborough";
$province="Ontario";
$pocode="M1V3D4";
$email="krishanndj@jdfcc.com";
$website="https://jsjsckl.sdhh.chhc-726278278893453fe";
$joindate="2016-04-23";
$basicpay="100000";
$stmt->execute();
echo "New records created successfully";

$name="Swati";
$geder="female";
$bdate="1990-09-15";
$address="1,Kunhfsi krishna road";
$city="Scarborough";
$province="Ontario";
$pocode="M1V8D2";
$email="swati14523@jdf.com";
$website="https://jsjsckl.sdhh.vdkjkjkchhc-726278278312415";
$joindate="2012-08-12";
$basicpay="1300000";
$stmt->execute();
echo "New records created successfully";

$name="Damini";
$geder="female";
$bdate="1990-12-23";
$address="1,krushav place";
$city="Scarborough";
$province="Ontario";
$pocode="M1F3D4";
$email="damin@jdf.com";
$website="https://jsjsckl.sdhh.chhc-7262782783";
$joindate="2014-03-11";
$basicpay="1230000";
$stmt->execute();
echo "New records created successfully";

$name="Mainal";
$geder="male";
$bdate="1990-08-15";
$address="1,Kohli neha road";
$city="Scarborough";
$province="Ontario";
$pocode="M1S3D4";
$email="dweoijion@jdf.com";
$website="https://jsjsckl.sdhh.chhc-7262782783";
$joindate="2014-04-11";
$basicpay="1000000";
$stmt->execute();
echo "New records created successfully";

$name="Shweta";
$geder="female";
$bdate="1990-11-09";
$address="1,Field Sparrow Road";
$city="Scarborough";
$province="Ontario";
$pocode="M1V3D4";
$email="shwetasn@jdf.com";
$website="https://jsjsckl.sdhh.chhc-726278278893453";
$joindate="2015-03-17";
$basicpay="1500000";
$stmt->execute();
echo "New records created successfully";

$name="Neha";
$geder="male";
$bdate="1990-12-04";
$address="1,circus square road";
$city="Scarborough";
$province="Ontario";
$pocode="M1V8D2";
$email="nehshcs@jdf.com";
$website="https://jsjsckl.sdhh.vdkjkjkchhc-726278278312415";
$joindate="2016-03-27";
$basicpay="100000";
$stmt->execute();
echo "New records created successfully";

$name="Jigisha";
$geder="female";
$bdate="1985-04-17";
$address="1,Subhir notkil road";
$city="Scarborough";
$province="Ontario";
$pocode="M1S3D4";
$email="jigishap@jdf.com";
$website="https://jsjsckl.sdhh.chhc-7262782783";
$joindate="2014-04-11";
$basicpay="1700000";
$stmt->execute();
echo "New records created successfully";

$name="kumarika";
$geder="female";
$bdate="1987-12-13";
$address="1,Field Sparrow Road";
$city="Scarborough";
$province="Ontario";
$pocode="M1V3D9";
$email="kumarika@jdf.com";
$website="https://jsjsckl.sdhh.chhc-726278278893453";
$joindate="2015-03-17";
$basicpay="1500000";
$stmt->execute();
echo "New records created successfully";

$name="Jagrut";
$geder="male";
$bdate="1990-12-04";
$address="1,square one road";
$city="Scarborough";
$province="Ontario";
$pocode="M1V8D3";
$email="njagrut@jdf.com";
$website="https://jsjsckl.sdhh.vdkjkjkchhc-726278278312415";
$joindate="2016-03-27";
$basicpay="1100000";
$stmt->execute();
echo "New records created successfully";
$stmt->close();

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>