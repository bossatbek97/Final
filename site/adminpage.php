<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html >
<html>
<head>
<title>Welcome admin- <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/mine_style.css"> 
  <title></title>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/contacts.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery.jcarousel.css" type="text/css" media="all" />
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<link rel="shortcut icon" href="css/images/favicon.ico" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="js/func.js"></script>
</head>
<body>
<div class="">
<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="home.php">BOSSATBEK</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
    <div class="navbar-right">
      <p1 style="color:orange">Welcome admin<p2 style="color:yellow"> <?php echo $userRow['username']; ?><p/2></p1>
      <p3 style="color:red"><a href="logout.php?logout">Sign Out</a></p3>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Главная</a></li>
      <li><a href="o nas.php">О Нас</a></li>
      <li><a href="contacts.php">Контакты</a></li>
      <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Модели<b class="caret"></b></a>
      <ul class="dropdown-menu">
      <li><a href="cruze.php">Chevrolet Cruze</a></li>
          <li><a href="malibu.php">Chevrolet Malibu</a></li>
        <li><a href="aveo.php">Chevrolet Aveo</a></li>
      </ul>
      </li>
      </ul>
      </div>
      </nav>
<div class="shell">
  <div class="border">
  <h1>UPDATE DELETE</h1>
              <table>
        <tr>
          <td><b>ID |</b></td>
          <td><b>NAME |</b></td>
          <td><b>EMAIL |</b></td>
          <td><b>PASSWORD |</b></td>
        </tr>
      </table>
<?php
  include "conn.php";
  $sql = "select * from users";
  $result = $db->query($sql);
  $var = 0;
  while(mysqli_num_rows($result)>$var){
    $row = $result->fetch_array();
    echo "
      <table>
        <tr>
          <td>$row[user_id] |</td>
          <td>$row[username] |</td>
          <td>$row[email] |</td>
          <td>$row[password] </td>
        </tr>
      </table>
      <a href=\"del.php?id=$row[user_id]\">delete</a>
      <form method='post' action=\"update.php?id=$row[user_id]\">
        <input type='text' name='name' placeholder='update name'>
        <input type='submit' value='update'>
      </form>
    ";
    $var++;
  }
 ?>

    <div id="header">

      
      
      <div class="cl">&nbsp;</div>
    </div>
    <div id="navigation">
       
      <div class="cl">&nbsp;</div>
    </div>
    <div id="main">
      <div id="content" class="left">
        <div class="highlight">
          
           </div>
                  
        </div>
      </div>
      
      <div class="cl">&nbsp;</div>
    </div>
    <div class="shadow-l"></div>
    <div class="shadow-r"></div>
    <div class="shadow-b"></div>
  </div>
  
</div>
</body>
</html>