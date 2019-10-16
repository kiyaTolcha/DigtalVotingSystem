<?php
				//If your session isn't valid, it returns you to the login screen for protection
				// if(empty($_SESSION['adminId'])){
				//  	header("location:access-denied.php");
        // }
        
				if (isset($_POST['submit']))
				{

					$myFirstName = addslashes( $_POST['firstname'] );
					$myLastName = addslashes( $_POST['lastname'] ); 
					$myEmail = $_POST['email'];
					$myPassword = $_POST['password'];

					$newpass = $myPassword;

					$sql = mysqli_query( "INSERT INTO Admin(fname, lname, email, password) VALUES ('$myFirstName','$myLastName', '$myEmail', '$newpass')" )
					        or die( mysqli_error() );

					die( "A new administrator account has been created." );
				}
				
				if (isset($_GET['id']) && isset($_POST['update']))
				{
					$myId = addslashes( $_GET['id']);
					$myFirstName = addslashes( $_POST['firstname'] ); 
					$myLastName = addslashes( $_POST['lastname'] );
					$myEmail = $_POST['email'];
					$myPassword = $_POST['password'];

					$newpass = $myPassword;

					$sql = mysqli_query( "UPDATE Admin SET first_name='$myFirstName', last_name='$myLastName', email='$myEmail', password='$newpass' WHERE admin_id = '$myId'" )
					        or die( mysqli_error() );

					die( "An administrator account has been updated." );
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
        <li><a href="description.php">Home</a></li>
        <li><a class="drop" href="#">Admin Panel Pages</a>
          <ul>
            <!-- <li class="active"><a href="manage-admins.php">Manage Admin</a></li> -->
            <li><a href="description.php">Manage description</a></li>
            <li><a href="candidates.php">Manage Party</a></li>
            <li><a href="refresh.php">Results</a></li>
          </ul>
        </li>
        
        <li><a href="../index.php">Voter Panel</a></li>
        <li><a href="logout.php">Logout</a></li>

      </ul>
    </nav>
   
  </header>
</div>

<div >
	
	<h3 class="center">Manage Admin Accounts</h3>

<form class="form-horizontal" action="/manage-admins.php">
<div class="col-md-12">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</div>
</form>


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

<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.placeholder.min.js"></script>
</body>
</html>

