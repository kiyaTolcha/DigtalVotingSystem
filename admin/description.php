<?php
	session_start();  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "voteDB";
  $conn = mysqli_connect($servername, $username, $password, $dbname); 
  if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }
	$result=mysqli_query($conn,"SELECT * FROM Party")
  or die("There are no records to display ... \n" . mysqli_error($conn)); 
  //$results=mysqli_query($conn,"SELECT * FROM Party")
  //or die("There are no records to display ... \n" . mysqli_error($conn)); 
	if (isset($_POST['submit']))
	{
	$newDescription = $_POST['description'];
  $partyName=$_POST['partyname'];
  $partyId=$_POST['partyid'];
	$sql = "UPDATE Party SET description='$newDescription', partyName='$partyName' WHERE partyID='$partyId'";
  
			if (mysqli_query($conn, $sql)) {
       header("Location: description.php");
			} else {
				echo "Error updating record: " . mysqli_error($conn);
      }		
          
  mysqli_close($conn);
	//header("Location: description.php");
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
        <li class="active"><a href="../index.php">Home</a></li>
        <li><a class="drop" href="#">Admin Panel Pages</a>
          <ul>
            <!-- <li><a href="manage-admins.php">Manage Admin</a></li> -->
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
	<table width="380" align="center" style="border:0px">
	<h3 class="center">Add Description for party</h3>
	<form name="fmdescription" id="fmdescription" action="description.php" method="post">
	<tr>
      <td class="control-label">Party Id</td>
	    <td >
      <div class="form-group">
      <input type="text" name="partyid" class="form-control" />
      </div>
      
			</td><br>
	    <td class="control-label">Party Name</td>
	    <td class="control-label">
      <input type="text" name="partyname" class="form-control"/>
			</td><br>
			<td>Party Description</td>
			<td><input type="text" name="description" class="form-control"/></td>
	    <td><input type="submit" name="submit" value="update" class="btn btn-default"/></td>
	</tr>
	</table>
  
  <table width="420">
		<h3>Descriptions </h3>
		<tr>
    <th>Party ID</th>
		<th>Party Name</th>
		<th>Descriptions</th>
		</tr>

		<?php

			while ($row=mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row['partyID']."</td>";
			echo "<td>" . $row['partyName']."</td>";
			echo "<td>" . $row['description']."</td>";
			echo "</tr>";
			}
			
		?>

	</table>
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

<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.placeholder.min.js"></script>
</body>
</html>

