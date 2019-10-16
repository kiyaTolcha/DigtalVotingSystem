<?php
    session_start();
    //require('../connection.php');

// if(empty($_SESSION['admin_id'])){
//  	header("location:access-denied.php");
// }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "voteDB";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $result= mysqli_query($conn,"SELECT * FROM Party")
    or die("There are no records to display ... \n" . mysqli_error()); 
    // if ($result<1){
    //     $result = null;
    // }
?>

<?php
    $description_retrieved= mysqli_query($conn,"SELECT * FROM Party")
    or die("There are no records to display ... \n" . mysqli_error()); 
?>

<?php
if (isset($_POST['Submit']))
{

    $newPartyName = addslashes( $_POST['name'] ); 
    $newPartyPostion = addslashes( $_POST['description'] );
    

    $sql = mysqli_query( $conn,"INSERT INTO Party(partyName,description) VALUES ('$newPartyName','$newPartyPostion')" )
            or die("Could not insert candidate at the moment". mysqli_error() );

    
     header("Location: candidates.php");
    }
?>

<?php
     if (isset($_GET['id']))
     {
     $id = $_GET['id'];
     
     $result =  mysqli_query($conn,"DELETE FROM Party WHERE partyID='$id'")
     or die("The candidate does not exist ... \n"); 
     
     header("Location: candidates.php");
     }
     else
     // do nothing   
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
        <li class="active"><a href="../index.php">Home</a></li>
        <li><a class="drop" href="#">Admin Panel Pages</a>
          <ul>
            <!-- <li><a href="manage-admins.php">Manage Admin</a></li> -->
            <li><a href="description.php">Manage description</a></li>
            <li><a href="candidates.php">Manage Parties</a></li>
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
<table width="380" align="center">
<h3>Add New Party</h3>
<form name="fmCandidates" id="fmCandidates" action="candidates.php" method="post" onsubmit="return candidateValidate(this)">
<tr>
    <td bgcolor="#FAEBD7">Party Name</td>
    <td bgcolor="#FAEBD7"><input type="text" name="name" /></td>
</tr>

<tr>
    <td bgcolor="#7FFFD4">Party Description</td>
    <td bgcolor="#FAEBD7"><input type="text" name="description" /></td>
    <td bgcolor="#7FFFD4">
    </td>
</tr>
<tr>
    <td bgcolor="#BDB76B">&nbsp;</td>
    <td bgcolor="#BDB76B"><input type="submit" name="Submit" value="Add" /></td>
</tr>
</table>
<hr>
<table border="0" width="620" align="center">
<h3>AVAILABLE Party</h3>
<tr>
<th>Party ID</th>
<th>Party Name</th>
<th>Party Vote Count</th>
<th>Party Description</th>
</tr>

<?php
    //loop through all table rows
    while ($row= mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['partyID']."</td>";
    echo "<td>" . $row['partyName']."</td>";
    echo "<td>" . $row['partyVoteCount']."</td>";
    echo "<td>" . $row['description']."</td>";
    echo '<td><a href="candidates.php?id=' . $row['partyID'] . '">Delete Candidate</a></td>';
    echo "</tr>";
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>

</table>
<hr>
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










