<?php
    session_start();
?>
<!DOCTYPE html>
<html>


<head>
<link rel="stylesheet" href="timeline.css"/>
<title>Home</title>


</head>
<body>
<div id="main">
<div id="lomein">
<div id="logo">
<p><i></i>Takida Gallery</i></p>
</div>
<div id="menu">
<ul>
<li><a href="timeline.php">Home</a></li>
<li><a href="buy.php">Buy</a></li>
<li><a href="editprofile.php">Edit info</a></li>
<li><a href="info.php">info</a></li>

</ul>
</div>

<?php


$li = mysql_connect("localhost","root","");
      mysql_select_db("takide",$li);

      $ID = $_SESSION["U_id"];
      $ms_pass=mysql_query("SELECT  * FROM buy_info WHERE id='$ID'");
      $row=mysql_fetch_array($ms_pass);
      $cost=$row[1];
      $tbuy=$row[2];
?>






<div id="totalcost">
<h2 id="c1"><?php echo($cost);?></h2>
<p id="f1">totalcost</p>
</div>
<div id="totalbuy">
<p id="f2">buyart</p>
</div>

<h2 id="c2"><?php echo($tbuy);?></a></h2>
</div>



</div>


</div>

</body>

</html>