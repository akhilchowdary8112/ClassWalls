<?php
$conn=mysqli_connect('localhost','root','','College');
$sql ="SELECT * FROM `events`";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0) {
  echo"<h1>registered details</h1>";
echo "<table>";
echo "<tr><th><td><h3>--First_name--</h3></td><td><h3>--Last_name--</h3></td><td><h3>--Roll_no--</h3></td><td><h3>--email_id--</h3></td></th></tr><br>";
 while($row=mysqli_fetch_assoc($result)){
  echo "<tr><th><td>" . $row["f_name"]. "</td><td>" . $row["l_name"]. "</td><td> " . $row["id"]. " </td><td>" . $row["email"]."</td></th></tr>";
  }
} else {
  echo "NO ONE RIGISTERED FOR THIS EVENT";

$conn->close();
}
?>