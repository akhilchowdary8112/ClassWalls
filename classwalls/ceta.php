<?php
$servername="localhost";
$database="college";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['sub']))
{
$f=$_POST['f'];
$l=$_POST['l'];
$e=$_POST['e'];
$p=$_POST['p'];
$l=$_POST['language'];
$c=$_POST['country'];
$sql_query="INSERT INTO `college_profiles`(`fname`, `College_Id`) VALUES ('$email','$password','$roll_no')";
if (mysqli_query($conn,$sql_query))
{
echo "registered successfully"; 
}
else
{
echo "false";
}
mysqli_close($conn);
}
?>