<?php
    extract($_POST);   
?>

 <?php
   $servername = "localhost";
   $usname = "root";
   $pass= "";
   $dbname = "guvi";
   $count=0;

$conn = new mysqli($servername, $usname, $pass, $dbname);
// Check connection
if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT * FROM allusers where email=? and password=?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result=$stmt->get_result();

$row = $result -> fetch_array(MYSQLI_ASSOC);
$a=$row["age"];
$d=$row["dob"];
$c=$row["contact"];

$rowcount=mysqli_num_rows($result);
$count=$rowcount;

 if($rowcount>0){
    echo "<script>window.location.href = 'http://localhost/guvi/profile.html';</script>";	
 }
	else
   echo "<h1 style=\"color:red\";> Invalid Username/Password </h1>";

  mysqli_free_result($result);
  $stmt->close();
  mysqli_close($conn);
?>

