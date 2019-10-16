<?php
      // session_start();
      // $myusername = $_SESSION['nam'] ;
      // $mypassword = $_SESSION['pas'] ;

    session_start();
    $myusername = isset($_SESSION['nam'])?$_SESSION['nam']:"" ;
    $mypassword = isset($_SESSION['pas'])?$_SESSION['pas']:"" ;
?>
<?php
      if(isset($_COOKIE['$email']) && $_COOKIE['$pass']){
          header("Location:admin.php");
          exit;
      }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login Form</title>
  
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->

  <!-- <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'> -->
<!-- <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'> -->

      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script language="JavaScript" src="js/admin.js">
  </script>

  
</head>

<body style="background-color: #727272;">
<div class="container">
<div id="login-form">
        <form name="form1" action="checklogin.php" method="post" onsubmit="return loginValidate(this) autocomplete="off"">

            <div class="col-md-12">

                <div class="form-group">
                    <h2 class="">Admin Login:</h2>
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
                        <input name="myusername" value="<?php echo $myusername  ?>" required="required"type="email" class="form-control" placeholder="Email" required/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input name="mypassword" value="<?php echo $mypassword ?>" type="password"  required="required" class="form-control" placeholder="Password" required/>
                    </div>
                </div>

                <div class="form-group">
                    <hr/>
                </div>
                
                <div class="form-group">
                <input type="checkbox" name="remember" value="1"> Remember Me
                </div>                
                <div class="form-group">
                    <button class="btn btn-block btn-primary" name="submit" type="submit">Login</button>
                </div>

                <div class="form-group">
                    <hr/>
                </div>
                Return to <a href="../index.php">Voter Panel</a>

                <!-- <div class="form-group">
                    <a href="register.php" type="button" class="btn btn-block btn-danger"
                       name="btn-login">Register</a>
                </div> -->

            </div>

        </form>
    </div>
    </div>

  
<!-- 
<div class="pen-title">
  <h1>Admin Login Form</h1>
</div>

<div class="container" >
  <div class="card"></div>

  <div class="card">
    <h1 class="title">Login</h1>
    <form >

      <div class="input-container">
        <input />
        <label>Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input />
        <label>Password</label>
        <div class="bar"></div>
      </div>

      <center><tr><td colspan="2" align="center"><font color="blue">Remember Me</font></td></tr></center><br>

      <div class="button-container">

        <button name="submit" type="submit"><span>Login</span></button>

      </div>
      <br><br>
    <center>Return to <a href="../index.php">Voter Panel</a></center>

    </form>
  </div> -->
  
</div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>




