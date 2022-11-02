<?php
$servername="localhost";
$database="college";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['sub']))
{
$email=$_POST['email'];
$password=$_POST['psw'];
$roll_no=$_POST['roll_no'];
$sql_query1="SELECT * FROM `profile` WHERE college_id='$roll_no' or 'e-mail'='$email';
$rows=mysqli_query($conn,$sql_query1);
 $a=mysqli_num_rows($rows);
if ($a>0)
{
echo "Already Registered with this email or Id";
echo"<a href='LoRe.html'> GO TO LOGINPAGE</a>";
}
else
{
$sql_query="INSERT INTO `profile`(`college_id`, `first`, `last`, `e-mail`, `phone`, `country`, `language`, `password`) VALUES ('$roll_no','','','$email','','','','$password')";
if (mysqli_query($conn,$sql_query))
{
echo "registered successfully ";
echo "please login in login page";
echo"<a href='LoRe.html'> GO TO LOGINPAGE</a>";

}
else
{
echo "login failed";
echo"<a href='LoRe.html'>back to registration page</a>";
}
mysqli_close($conn);
}
}
?>
