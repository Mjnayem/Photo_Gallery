<!DOCTYPE html>
<html>


<head>
<link rel="stylesheet" href="style.css"/>
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
<li><a href="info.php">Info</a></li>
<li><a href="signin.php">Sign In</a></li>
<li><a href="login.php">Log In</a></li>

</ul>
</div>
<div id="intro">

<p><i>This site is a art gallery site .Famous arts of famous people you can find here.</i><br /></p>
</div>
<div id="glre">
<ul>
<li><a href="photohl.php"><i>SEE PHOTOS</i></a></li>
</ul>
</div>

</div>
<div id="ceoin">
<div id="img">
<img  src="IMG_8192.JPG"/>
<p>Takida<br />CEO</p>


</div>
<div id="cntkinfo">
<a href="#"><img  src="images (3).jpg" id="im1"/></a>
<a href="#"><img  src="googlelogo.png" id="im2"/></a>
<a href="#"><img  src="twiterlogo.png" id="im3"/></a>
</div>

</div>

</div>







<div id="sndeml">
<p>Send message to ceo</p>
<form action="index.php" method="post">
<input type="text" placeholder="Name...." id="s1"name="name"/>
<input type="text" placeholder="Email" id="s2" name="email"/>
<input type="text" placeholder="Message" id="s3" name="msg"/>
<input  type="submit" name="submit" value="SEND" id="s4"/>

</form>
<?php
$li = mysql_connect("localhost","root","");
      mysql_select_db("takide",$li);
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
      $msg=$_POST['msg']; 
      mysql_query("Insert into massage(name,email,text) values('$name','$email','$msg')");
        ?>
         {
          <script>
          alert("Message send");
          </script>
         }
         <?php
    
}
?>

</div>



</div>

</body>

</html>