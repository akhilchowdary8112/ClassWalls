<?php
session_start();
?>
<?php
$_SESSION["usn"] = $_POST['uname'];
if(isset($_POST['sub']))
{
$conn=mysqli_connect('localhost','root','','College');
 $name=$_POST['uname'];
 $pwd=$_POST['psw'];
 if($name!=''&&$pwd!='')
 {
   $query="SELECT * FROM `profile` WHERE college_id='$name' and password='$pwd'";
   $rows=mysqli_query($conn,$query);
   $a=mysqli_num_rows($rows);
   if($a>0){
   echo "login succesful";
   <?php
$_SESSION["user"] = $name;
echo "Session information are set successfully.<br/>";
?>
   header("Location:Home.html");
   echo "login succesful";
   }else{
   echo "failed";
   }
 }
 else
 {
  echo'Enter both username and password';
  header("location:login.html");
 }
}
mysqli_close($conn);
?>
