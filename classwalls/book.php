<?php
$servername="localhost";
$database="college";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['sub']))
{
$i=$_POST['bid'];
$r1=$_POST['bname'];
$r2=$_POST['mailid'];
$r3=$_POST['country'];
$r4=$_POST['subject'];

$sql_query="INSERT INTO `books`(`id`, `name`, `mail`, `origin`, `feedback`) VALUES ('$i','$r1','$r2','$r3','$r4')";


if (mysqli_query($conn,$sql_query))
{
echo "rated successfully "; 
echo "<a href='home.html'>GO TO HOME</a>";

}
else
{
	echo "enter correct details or";
	
echo "already rated or please enter correct Id";

}
mysqli_close($conn);
}
?>
