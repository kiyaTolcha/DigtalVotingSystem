<?php
session_start();
if(empty($_SESSION['admin_id'])){
 	header("location:access-denied.php");
}
//require_once('../connection.php');
// retrieving candidate(s) results based on position
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voteDB";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_error());
$result= mysqli_query($conn,"SELECT * FROM Party");
$result1 = mysqli_query($conn,"SELECT * FROM Party");
// if (isset($_POST['Submit'])){   

//   // $partyname = addslashes( $_POST['partyname'] );
  
//     $results = mysqli_query($conn,"SELECT * FROM Party");
    
// }
//     else

?> 
<?php
$partyname= mysqli_query($conn,"SELECT * FROM Party")
or die("There are no records to display ... \n" . mysqli_error($conn)); 
?>
<?php
session_start();
//If your session isn't valid, it returns you to the login screen for protection
// if(empty($_SESSION['admin_id'])){
//  header("location:access-denied.php");
// }
?>


<!DOCTYPE html>

<html>
<head>
<title>Digital voting</title>


<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<script language="JavaScript" src="js/admin.js">
</script>

</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    
    <div id="logo" class="fl_left">
      <h1><a href="index.php">Digital Voting</a></h1>
    </div>
      </ul>
    </nav>
    
  </header>
</div>

<div >
 
  <div >
    <form name="fmNames" id="fmNames" method="post" action="refresh.php" onSubmit="return positionValidate(this)">
    <div class="form-group center"><input type="submit" name="Submit" value="Refresh" /></div>
    <?php
      // 
      // while ($row= mysqli_fetch_array($result)){
      //   $totalvotes=$totalvotes+$row['partyVoteCount'];
      // }
    ?>
    </form> 
    
    <table border="0" width="620" align="center">
    <h3>Party Vote Result</h3>
    <tr>
    <th>Party Name</th>
    <th>Party Vote</th>
    </tr>

    <?php
      //loop through all table rows
      $totalvotes=0;
      while ($row= mysqli_fetch_array($result1)){
        $totalvotes=$totalvotes+ $row['partyVoteCount'];
      }
      while ($row= mysqli_fetch_array($result)){
        
        echo "<tr>";
        echo "<td>" . $row['partyName']."</td>";
        echo "<td>" . $row['partyVoteCount']."/$totalvotes</td>";
        echo "</tr>";
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>

</table>
  
  </div>

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
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.placeholder.min.js"></script>
</body>
</html>



