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
        
        <li><a class="drop" href="#">Voter Panel</a>
          <ul>
            <li><a href="login.php">Login</a></li>
            <li class="active"><a href="registeracc.php">Registration</a></li>
           
          </ul>
        </li>
        
      </ul>
    </nav>
  


  </header>
</div>




<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/background1.jpg');">
  <section id="testimonials" class="hoc container clear"> 
  
    <ul class="nospace group">
      <li class="one_half">
        

      	<div id="container">
		<div><h3>Registration successfull!</h3></div>
    <h4><a class="btn" href="registeracc.php">Add another Voter</a></h4>
		</div>

      
      </li>
    </ul>
  </section>
</div>
</table>
<hr>
<table border="0" width="620" align="center">
<h3>AVAILABLE VOTERS</h3>
<tr>
<th>Voter ID</th>
<th>Voter Name</th>
</tr>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "voteDB";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $result= mysqli_query($conn,"SELECT * FROM voter")
    or die("There are no records to display ... \n" . mysqli_error());

    

    if (isset($_GET['id']))
     {
     $id = $_GET['id'];
     
     $result =  mysqli_query($conn,"DELETE FROM voter WHERE voterId='$id'")
     or die("The candidate does not exist ... \n"); 
     
     header("Location: suc.php");
     }
     else
    
    while ($row= mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['voterId']."</td>";
    echo "<td>" . $row['voterEmail']."</td>";
    echo '<td><a href="suc.php?id=' . $row['voterId'] . '">Delete Candidate</a></td>';
    echo "</tr>";
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>

</table>


  </footer>
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