
<?php
    session_start();
?>
<!DOCTYPE html>
<html>


<head>
<link rel="stylesheet" href="login.css"/>
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
<li><a href="index.php">Info</a></li>
<li><a href="sihnin.php">Sign In</a></li>
<li><a href="login.php">Log In</a></li>

</ul>
</div>
<div id="intro">

<p><i>Enter email and password</i><br /></p>
</div>


</div>




<div id="fm">
<form action="login.php" method="post">
<input  type="text"name="email"placeholder="Email" id="s2"/>
<input  type="password"name="pass"placeholder="Sample password" id="s5"/>
<input  type="submit"name="login"value="Go" id="s6"/>



</form>




<?php


$li = mysql_connect("localhost","root","");
      mysql_select_db("takide",$li);
if(isset($_POST['login']))
{
        $email=$_POST['email'];
      $password=$_POST['pass'];
      
      $ms_pass=mysql_query("SELECT  * FROM user_info WHERE email='$email'");
      $row=mysql_fetch_array($ms_pass);
      $xxx=$row[5];
      echo($xxx);
      $s_id=$row[0];
      if($xxx== $password)
      {
        
        //setcookie("U_id","$s_id");
        $_SESSION["U_id"] = $s_id;
        //echo $_SESSION["U_id"];
        header("Location: timeline.php");
        exit;
        
      }
      else
      {
        ?>
         <script>
         alert("Sorry Wrong id or password");
         </script>
         <?php
      }
    
   
     // mysql_query("Insert into signin(username,id,g_year,email,password) values('$name','$s_id','$G_year','$email','$password')");
    
}
?>



</div>


</div>

</body>

</html>