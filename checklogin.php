
<!DOCTYPE html>

<html>
<head>
<title>Digital voting</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- <link href="css/user_styles.css" rel="stylesheet" type="text/css" /> -->
<script language="JavaScript" src="js/user.js">
</script>

</head>



<body id="top">



<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    


    <div class="fl_left">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="https://uk.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="https://www.rss.com/"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +251927956699</li>
        <li><i class="fa fa-envelope-o"></i> ThisIsOur@gmail.com </li>
      </ul>
    </div>


  </div>
</div>



<div class="wrapper row1">
  <header id="header" class="hoc clear"> 


    <div id="logo" class="fl_left">
      <h1><a href="index.php">Digital Voting</a></h1>
    </div>
   



	<nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="checklogin.php">Home</a></li>
        
        <li><a class="drop" href="#">Voter Panel</a>
          <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="registeracc.php">Registration</a></li>
           
          </ul>
        </li>
        
      </ul>
    </nav>
  


  </header>
</div>




<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/background1.jpg');">
  <section id="testimonials" class="hoc container clear"> 


    <h2 class="font-x3 uppercase btmspace-80 underlined"> Digital <a href="#">Voting</a></h2>
    <ul class="nospace group">
      <li class="one_half">
        

      	<div >
		<h1>Invalid Credentials Provided </h1>

		</div>

		<div>

<?php
	session_start();

  $email=$_POST['myusername'];
  $pass=$_POST['mypassword'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "voteDB";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
// Defining your login details into variables
	//$myusername=$_POST['myusername'];
//	$mypassword=$_POST['mypassword'];
	//$encrypted_mypassword=md5($mypassword); //MD5 Hash for security
  // MySQL injection protections
        // $email = stripslashes($email);
        // $pass = stripslashes($pass);
        // $email = mysqli_real_escape_string($conn, $_POST['email']);
        // $pass = mysqli_real_escape_string($conn, $_POST['pass']);

	$sql="SELECT * FROM voter WHERE voterEmail='$email' and password='$pass'" or die(mysqli_error());
  
  $result= mysqli_query($conn,$sql) or die(mysqli_error());
	


// If username and password is a match, the count will be 1

	if($result>0){
	// If everything checks out, you will now be forwarded to voter.php
  $user = mysqli_fetch_assoc($result);
				$_SESSION['voterId'] = $user['voterId'];
        header("location:voter.php");
			}
			//If the username or password is wrong, you will receive this message below.
			else {
				echo "Wrong Username or Password<br><br>Return to <a href=\"login.php\">Login</a>";
			}
		?> 

		</div>


      
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

