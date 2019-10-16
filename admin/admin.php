
<?php
    session_start();
    require('../connection.php');
    $log1 = $_SESSION['log1'];
?>
<?php
      if(isset($_COOKIE['$email']) && $_COOKIE['$pass']){
            $curnam = $_SESSION['curname'];
            $curpas = $_SESSION['curpass'];
        }
        else if($log1 == 11)
        {
            $curnam = $_SESSION['curname'];
            $curpas = $_SESSION['curpass'];
        }
        else 
        {
           echo '<img src="e1.jpg" width="100%" height="100%"  />';  /* here goes the page when destroy the cookies */
           exit;
        }
?>



<!DOCTYPE html>

<html>
<head>
<title>Digital voting</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<!-- <link href="css/user_styles.css" rel="stylesheet" type="text/css" /> -->
<script language="JavaScript" src="js/user.js">
</script>

</head>
<body id="top">
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="../index.php">Digital Voting</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="../index.php">Home</a></li>
        <li><a class="drop" href="#">Admin Panel Pages</a>
          <ul>
            <!-- <li><a href="manage-admins.php">Manage Admin</a></li> -->
            <li><a href="description.php">Manage Description</a></li>
            <li><a href="candidates.php">Manage Parties</a></li>
            <li><a href="refresh.php">Results</a></li>
            <li><a href="registeracc.php">Register Voter</a></li>
          </ul>
        </li>
        
        <li><a href="../login.php">Voter Panel</a></li>
        <li><a href="logout.php">Logout</a></li>

      </ul>
    </nav>
  </header>
</div>
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/background1.jpg');">
  <section id="testimonials" class="hoc container clear"> 
   
    <h2 class="font-x3 uppercase btmspace-80 underlined"> Digital <a href="#">Voting</a></h2>
    <ul class="nospace group">

       <li class="one_third">

          <blockquote>In this page, Admin can set candidates for voting and view results.</blockquote>
        
      </li> 

    </ul>
   
  </section>
</div>

<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
   
    <div class="one_third first">
      <h6 class="title">Address</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
         
          <p>
          University  : Admas <br>
          Batch       : second <br>
          Dept        : CSE <br>
          </p>
          </address>
        </li>
      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Phone</h6>
      <ul class="nospace linklist contact">
       
        <li><i class="fa fa-phone"></i> +251927956699<br>
          </li>


      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Email</h6>
      <ul class="nospace linklist contact">
        
        <li><i class="fa fa-envelope-o"></i> ThisIsOur@gmail.com </li>

      </ul>
    </div>

  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">To The Group Memebers</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
