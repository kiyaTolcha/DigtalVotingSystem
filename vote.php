
<?php
  //require_once('connection.php');
  

  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "voteDB";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
  
  // if(empty($_SESSION['voterId'])){
  //   header("location:access-denied.php");
  // }

    $partynameRetrieved= mysqli_query($conn,"SELECT * FROM Party")
    or die("There are no records to display ... \n" . mysqli_error()); 
    // output data of each row
     if (isset($_POST['Submit']))
     {
       
       $partyname = addslashes( $_POST['partyname'] ); 
       
       
       $result = mysqli_query($con,"SELECT * FROM Party WHERE partyPostion='$partyname'")
       or die(" There are no records at the moment ... \n"); 
     
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
      <h1><a href="index.php">Digital Voting</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="voter.php">Home</a></li>
        
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>
</div>

<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/background1.jpg');">
  <section id="testimonials" class="hoc container clear"> 
    <h2 class="font-x3 uppercase btmspace-80 underlined"> Digital <a href="#">Voting</a></h2>
    <ul class="nospace group">

      <li class="one_half">
        <blockquote>
            
            <CAPTION><h3>Choose you Party and Submit a Vote</h3></CAPTION>
            <form action="save.php?id=<?php echo $_SESSION['voterId']; ?>" method="post" onsubmit="return updateProfile(this)">

            <SELECT class="form-control selcls" name="partyName[]">select
      <OPTION VALUE="select">select
    <?php
        //loop through all table rows
        while ($row= mysqli_fetch_array($partynameRetrieved)){
          echo "<OPTION VALUE=$row[partyName]>$row[partyName]";
        }
    ?>
    </SELECT>
                <div class="form-group">
                  <button type="submit" name="submit" value="Login" class="btn btn-block btn-primary">Vote</button>
                </div>
            </form>
      </blockquote>
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
          Batch       : seocnd <br>
          Dept        : CSE <br>
          </p>
          </address>
        </li>
      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Phone</h6>
      <ul class="nospace linklist contact">
       
        <li><i class="fa fa-phone"></i> +251927956699<br></li>


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
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved - <a href="#">To the Group Members</a></p>
    <p class="fl_right">Desined in <a target="_blank" href="http://www.bootstrapp.com/" title="free-css and js framework">Bootstrap</a></p>
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


