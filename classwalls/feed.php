<?php
$servername="localhost";
$database="college";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['sub']))
{
$i=$_POST['id'];
$r1=$_POST['rating1'];
$r2=$_POST['rating2'];
$r3=$_POST['rating3'];
$r4=$_POST['commentText'];

$sql_query1="INSERT INTO `feedback`(`id`, `rating1`, `rating2`, `rating3`, `suggestions`) VALUES ('$i','$r1','$r2','$r3','$r4')";


if (mysqli_query($conn,$sql_query1))
{

echo "<h1>rated successfully <br></h1>"; 
echo"<a href='home.html'><h3>Go to home page</h3></a>";


}
else
{
	echo "<h1>already rated or please enter correct Id</h1><br>";
	echo"<a href='feedback.html'><h3>GO TO FEEDBACK FORM</h3></a>";
	


}
mysqli_close($conn);
}
?>
