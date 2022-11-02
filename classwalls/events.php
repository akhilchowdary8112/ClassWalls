<?php
$servername="localhost";
$database="college";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['sub']))
{
$f=$_POST['first-name'];
$l=$_POST['last-name'];
$r=$_POST['roll_no'];
$e=$_POST['email'];
$b=$_POST['branch'];
$y=$_POST['year'];

$sql_query="INSERT INTO `events`(`f_name`, `l_name`, `id`, `email`, `year`, `brach`) VALUES ('$f','$l','$r','$e','$y','$b')";
if (mysqli_query($conn,$sql_query))
{
echo "registered successfully";
echo"<a href='home.html'>Go Back</a>";
}
else
{
echo "registered already or enter correct details";
echo"<a href='events.html'>Go Back</a>";
}
mysqli_close($conn);
}
?>