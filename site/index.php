<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: home.php");
 }
 
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>
<!DOCTYPE html >
<html>
<head>
<title>My site</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/mine_style.css"> 
  <title></title>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/npm.js"></script>
  <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery.jcarousel.css" type="text/css" media="all" />
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<link rel="shortcut icon" href="css/images/favicon.ico" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="js/func.js"></script>

</head>
<style> 
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    background-image: url(css/images/body1.jpg);
    border: solid 0px #c3c3c3;
}

#panel {
    padding: 1px;
    display: none;
}
</style>
<body>


<div id="q">
<div id="qw">
<nav class="navbar navbar-inverse" role="navigation">
    <div class="1">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="">BOSSATBEK</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
    <div class="navbar-right">
      
     
    </div>
    <ul class="nav navbar-nav">
      <li><a href="">Главная</a></li>
      <li><a href="">О Нас</a></li>
      <li><a href="">Контакты</a></li>
      <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Модели<b class="caret"></b></a>
      <ul class="dropdown-menu">
      <li><a href="">Chevrolet Cruze</a></li>
          <li><a href="">Chevrolet Malibu</a></li>
        <li><a href="">Chevrolet Aveo</a></li>
      </ul>
      </li>
      </ul>
      </div>
      </nav>
</div>
<div id="flip"><h1 style="color:orange">Sign In</h1></div>
<div id="panel">Hello world!

<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<h1 style="color:orange" align="center"></h1>
<center>

<div id="login-form">
<form method="post">
<table align="center" width="10%" border="0">
<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
<tr><td><button><a href="register.php">Sign Up Here</a></button></td></tr>
</tr>
<tr>
<td></td>
</tr>
</table>
</form>

</center>
</div>
<div class="shell">
<script> 
$(document).ready(function(){
    $("#qw").mouseenter(function(){
        alert("Sign In,please");
    });
});</script>
</div>
  
</body>
</html>