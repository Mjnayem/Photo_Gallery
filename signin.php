<!DOCTYPE html>
<html>


<head>
<link rel="stylesheet" href="signin.css"/>
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

<p><i>Creat new account here</i><br /></p>
</div>


</div>




<div id="fm">
<form action="signin.php" method="post">
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
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
      $age=$_POST['age']; 
      $phone=$_POST['phone'];
      $pass=$_POST['pass'];
      mysql_query("Insert into user_info(name,email,phone,age,pass) values('$name','$email','$phone','$age','$pass')");
       
        
      ?>
         {
          <script>
          
          alert("Congreculation ! \nYour id is created.");
          </script>
         }
    <?php
}
?>

</div>


</div>

</body>

</html>