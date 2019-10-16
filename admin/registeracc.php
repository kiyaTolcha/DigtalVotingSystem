
<?php
// session_start();
// if(empty($_SESSION['admin_id'])){
//   header("location:access-denied.php");
// }

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
        <li class="active"><a href="index.php">Home</a></li>
        
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>
</div>

<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/background1.jpg');">
  <section id="testimonials" class="hoc container clear"> 
    <ul class="nospace group">
      <li class="one_half">
        <div class="jubmotron">


<div  >
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "voteDB";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //Process
    if (isset($_POST['Submit']))
    {
        $voterEmail = addslashes( $_POST['email']);
        $password = addslashes( $_POST['password']); 
        
    
        $sql = mysqli_query( $conn,"INSERT INTO voter(voterEmail,password) VALUES ('$voterEmail','$password')" )
                or die("Could not insert voter at the moment". mysqli_error() );
         header("Location: suc.php");
        }
  	echo "<center><h5>Voter Restration form:</h5></center>";
  	
  ?>
</div> 
<div id="login-form">
        <form name="form1" method="post" action="registeracc.php" onSubmit="return registerValidate(this)" autocomplete="off">

            <div class="col-md-12">

                <div class="form-group">
                    <h2 class="">SignUp:</h2>
                </div>

                <div class="form-group">
                    <hr/>
                </div>

                <?php
                if (isset($errMSG)) {

                    ?>
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-info-sign"></span>
                        </div>
                    </div>
                    <?php
                }
                ?>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input  name="email" type="text" class="form-control" placeholder="Email/Usename must contain @ and ." required/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input name="password" type="password" class="form-control" placeholder="Password" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input name="ConfirmPassword" type="password" class="form-control" placeholder="Confirm" required/>
                    </div>
                </div>

                <div class="form-group">
                    <hr/>
                </div>

                <div class="form-group">
                    <button type="Submit" name="Submit" class="btn btn-primary" value="Register Account">Register</button>
                </div>

                <div class="form-group">
                    <hr/>
                </div>
            </div>

        </form>
    </div>
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
          +251927956699</li>


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