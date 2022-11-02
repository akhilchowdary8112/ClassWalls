<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ClassWalls - Attendance</title>
    <style>
	
	body{
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Roboto", sans-serif;
  background: #333;
}

.chart{
  width: 600px;
  height: 300px;
  display: block;
}

.numbers{
  color: #fff;
  margin: 0;
  padding: 0;
  width: 50px;
  height: 100%;
  display: inline-block;
  float: left;
}

.numbers li{
  list-style: none;
  height: 150px;
  position: relative;
  bottom: 145px;
}

.numbers span{
  font-size: 12px;
  font-weight: 600;
  position: absolute;
  bottom: 0;
  right: 10px;
}

.bars{
  color: #fff;
  font-size: 12px;
  font-weight: 600;
  background: #555;
  margin: 0;
  padding: 0;
  display: inline-block;
  width: 500px;
  height: 300px;
  box-shadow: 0 0 10px 0 #555;
  border-radius: 5px;
}

.bars li{
  display: table-cell;
  width: 100px;
  height: 300px;
  position: relative;
}

.bars span{
  width: 100%;
  position: absolute;
  bottom: -30px;
  text-align: center;
}

.bars .bar{
  display: block;
  background: #17C0EB;
  width: 50px;
  position: absolute;
  bottom: 0;
  margin-left: 25px;
  text-align: center;
  box-shadow: 0 0 10px 0 rgba(23, 192, 235, 0.5);
  transition: 0.5s;
  transition-property: background, box-shadow;
}

.bars .bar:hover{
  background: #55EFC4;
  box-shadow: 0 0 10px 0 rgba(85, 239, 196, 0.5);
  cursor: pointer;
}

.bars .bar:before{
  color: #fff;
  content: attr(data-percentage) '%';
  position: relative;
  bottom: 20px;
}
	</style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  <link rel="icon" href="favicon.png" type="image/png">
  </head>
  
  <body>
  <form action="barchart.php" method="post">
   <h2>Enter rollno </h2>
  <input class="" type="text" name="id" placeholder="19121A0582"required></input><br>
  <input type="button" name="sub" value="submit"></input>
  </form>
 <?php
$conn=mysqli_connect('localhost','root','','College');
$i=$_POST['id'];
$sql ="SELECT `month1`, `month2`, `month3`, `month4` FROM `attendence` WHERE roll_no='$i'";
$result=mysqli_query($conn,$sql);
if(isset($_POST['sub']))
{
if(mysqli_num_rows($result)>0) {
 while($row=mysqli_fetch_assoc($result)){?>
 

  <!--chart start-->
    <div class="chart">
      <ul class="numbers">
        <li><span>100%</span></li>
        <li><span>50%</span></li>
        <li><span>0%</span></li>
      </ul>
      <ul class="bars">
        <li><div class="bar" data-percentage="<?phpecho $row["month1"]?>"></div><span>January</span></li>
        <li><div class="bar" data-percentage="<?phpecho $row["month2"]?>"></div><span>February</span></li>
        <li><div class="bar" data-percentage="<?phpecho $row["month3"]?>"></div><span>March</span></li>
        <li><div class="bar" data-percentage="<?phpecho $row["month4"]?>"></div><span>April</span></li>
		<?php }?>
		<?php }?>
		<?php }?>
		<?php $conn->close();?>
      </ul>
    </div>
    <!--chart end-->

    <script type="text/javascript">
    $(function(){
      $('.bars li .bar').each(function(key, bar){
        var percentage = $(this).data('percentage');
        $(this).animate({
          'height' : percentage + '%'
        },1000);
      });
    });
    </script>

  </body>
</html>
      