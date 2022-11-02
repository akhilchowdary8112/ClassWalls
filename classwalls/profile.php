<?php
$servername="localhost";
$database="college";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,$database);
$f=$_POST['f'];
$l=$_POST['l'];
$e=$_POST['e'];
$id=$_POST['id'];
$p=$_POST['p'];
$la=$_POST['language'];
$c=$_POST['country'];
if(isset($_POST['sub']))
{

$sql_query="UPDATE `profile` SET `first`='$f',`last`='$l',`e-mail`='$e',`phone`='$p',`country`='$c',`language`='$la' WHERE college_id='$id' ";
if (mysqli_query($conn,$sql_query))
{
echo"profile updated";
echo"<a href='home.html'>Go TO HOME PAGE</a>";
}
else
{
echo "not updated try again";
echo"<a href='profile.html'> GOBACK</a>";
}
mysqli_close($conn);
}
if(isset($_POST['d']))
{
$sql_query1="DELETE FROM `profile` WHERE college_id='$id'";

if(mysqli_query($conn,$sql_query1))
{
echo"account deactivated";
 echo"<a href='LoRe.html'>go to login page</a>";
}
else
{
	
	echo "no users with this information found";
	echo"<a href='profile.html'>profile</a>";
}
mysqli_close($conn);
}
?>