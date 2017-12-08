
<?php 
    session_start();
?>
<!DOCTYPE html>
<html>


<head>
<link rel="stylesheet" href="editprofile.css"/>
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
<li><a href="index.php">Home</a></li>
<li><a href="index.php">Buy</a></li>
<li><a href="sihnin.php">Edit info</a></li>
<li><a href="info.php">info</a></li>

</ul>
</div>
<div id="intro">


</div>


</div>



<div id="fm">
<form action="sihnin.php" method="post">
<input  type="text"name="name"placeholder="Name" id="s1"/>
<input  type="text"name="email"placeholder="Email" id="s2"/>
<input  type="text"name="age"placeholder="Agr" id="s3"/>
<input  type="text"name="phone"placeholder="Phone No." id="s4"/>
<input  type="text"name="pass"placeholder="Sample password" id="s5"/>
<input  type="submit"name="submit"value="Submit" id="s6"/>

</form>




<?php
$li = mysql_connect("localhost","root","");
      mysql_select_db("takide",$li);
      
      $ID = $_SESSION["U_id"];
if(isset($_POST['submit']))
{
    
    
      $re_1=$_POST['name'];
      $re_2=$_POST['email'];
      $re_3=$_POST['age'];
      $re_4=$_POST['phone'];
      $re_5=$_POST['pass'];
            
      
     //mysql_query("update signin set blood = '$Ublood' where id = '$Uid'");
      
      mysql_query("UPDATE user_info SET name='$re_1',email='$re_2',phone='$re_4',age='$re_3',pass='$re_5' WHERE id='$ID'");
      
         {
          header("location:timeline.php");
         }
}

?>






</div>


</div>

</body>

</html>