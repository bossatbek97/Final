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
<title>Welcome - <?php echo $userRow['email']; ?></title>
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
<body gcolor="#FFFFFF" text="#0000FF"
    onload="window.setTimeout('getSecs()',1)">
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
      <p1 style="color:orange">Welcome <?php echo $userRow['username']; ?></p1>
      <p2 style="color:red"><a href="logout.php?logout">Sign Out</a></p2>
      <script language="JavaScript">
	startday = new Date();
	clockStart = startday.getTime();

	function initStopwatch() {
    	var myTime = new Date();
    	var timeNow = myTime.getTime();
    	var timeDiff = timeNow - clockStart;
    	this.diffSecs = timeDiff/1000;
    	return(this.diffSecs); }

	function getSecs() {
	    var mySecs = initStopwatch();
    	var mySecs1 = ""+mySecs;
    	mySecs1= mySecs1.substring(0,mySecs1.indexOf(".")) + " secs.";
    	document.forms[0].timespent.value = mySecs1
    	window.setTimeout('getSecs()',1000); }

</script>
<form>
  <p3 style="color:blue" align="center"><strong>
   Here:</strong></font>
   <input type="text" size="9" name="timespent"></p>
</form>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Главная</a></li>
      <li><a href="o nas.php">О Нас</a></li>
      <li><a href="contacts.php">Контакты</a></li>
      <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Модели<b class="caret"></b></a>
      <ul class="dropdown-menu">
      <li><a href="Cruze.php">Chevrolet Cruze</a></li>
          <li><a href="malibu.php">Chevrolet Malibu</a></li>
        <li><a href="aveo.php">Chevrolet Aveo</a></li>
      </ul>
      </li>
      </ul>
      </div>
      </nav>
 <div class="shell">
  <div class="border">
    <div id="header">
      <h1 id="logo"><a href="home.php" class="notext">SMART</a></h1>
      
      <div class="cl">&nbsp;</div>
    </div>
    <div id="navigation">
       
      <div class="cl">&nbsp;</div>
    </div>
    <div class="slider">
      <div class="slider-nav"> <a href="#" class="left notext">1</a> <a href="#" class="left notext">2</a> <a href="#" class="left notext">3</a> <a href="#" class="left notext">4</a>
        <div class="cl">&nbsp;</div>
      </div>
      <ul>
        <li>
          <div class="item">
            <div class="text">
              <h3><em></em></h3>
              <h2><em>Chevrolet</em></h2>
            </div>
            <img src="css/images/chevrolet.png" alt="" /> </div>
        </li>
        <li>
          <div class="item">
            <div class="text">
              <h3><em></em></h3>
              <h2><em></em></h2>
            </div>
            <a href="cruze.php"><img src="css/images/cruze1.png" alt="" /></a> </div>
        </li>
        <li>
          <div class="item">
            <div class="text">
              <h3><em></em></h3>
              <h2><em></em></h2>
            </div>
            <a href="malibu.php"><img src="css/images/malibu.png" alt="" /></a> </div>
        </li>
        <li>
          <div class="item">
            <div class="text">
              <h3><em></em></h3>
              <h2><em></em></h2>
            </div>
            <a href="aveo.php">><img src="css/images/aveo1.png" alt="" /></a> </div>
        </li>
      </ul>
    </div>
    <div id="main">
      <div id="content" class="left">
        <div class="highlight">
          <h3>Chevrolet</h3>
          <p>Chevrolet — марка автомобилей, производимых и реализуемых одноимённым экономически самостоятельным подразделением корпорации General Motors.Шевроле является самой популярной среди марок концерна GM: в 2007 году было реализовано около 2,6 млн автомобилей.</p>
          <p>Компания Шевроле была создана 3 ноября 1911 года Уильямом Дюрантом, также основавшим в 1908 году компанию Дженерал Моторс, с известным гонщиком и автомобильным инженером Луи Шевроле и инвесторами — Уильямом Литтлом и Эдвином Кэмбелом. Компания была названа в честь Луи Шевроле, который в то далекое время, был в гоночной команде Бьюик. Он был любимым гонщиком Дэвида Бьюика.</p>
           </div>
        <div class="projects">
          <h3>Модели</h3>
          <div class="item">
            <div class="image left"> <a href="cruze.php"><img src="css/images/mini.jpg" alt="" /></a> </div>
            <div class="text left">
              <h4>Chevrolet Cruze</h4>
              <p>Chevrolet Cruze седан - это поистине международный автомобиль, заслуживший признание и любовь автовладельцев в 199 странах мира. Стильный и современный дизайн, превосходные технические характеристики и харизма позволили Шевроле Круз стать самой продаваемой моделью Шевроле.
Шевроле Круз выделяется в сегменте городских автомобилей своим комфортабельным салоном, запоминающейся внешностью и пятью звездами в рейтинге безопасности NCAP.</p>
              <a href="cruze.php" class="more">Подробнее</a> </div>
            <div class="cl">&nbsp;</div>
          </div>          
        </div>
      </div>
      <div id="sidebar" class="right"> 
      <div class="info">
          <h3>"Bossatbek"</h3>
          <p>“Bossatbek” является официальным дилером Chevrolet. В нашем мини автосалоне Вы найдете  модельный ряд автомобилей Chevrolet. “Bossatbek” является автосалоном  Sales (продажи). Поэтому, наш автоцентр готов предложить Вам и продажи новых автомобилей, и гарантийное обслуживание для Вашего chevrolet.</p>

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