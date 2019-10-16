<?php
		session_start();
		// if(empty($_SESSION['admin_id'])){
		// 	 header("location:access-denied.php");
		// }
		$partyName;
		 if(isset($_POST['submit'])){
			foreach($_POST['partyName'] as $select)
			{
				echo "you have selected".$select;
				$partyName=$select;
			}
		}
		$voterId=addslashes($_GET['id']);
		$servername = "localhost";
  		$username = "root";
  		$password = "";
  		$dbname = "voteDB";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$sql1="SELECT * FROM alreadyVoted WHERE voterId='$voterId'" or die(mysqli_error());
		$sql2="INSERT INTO alreadyVoted (voterId)
		VALUES ('$voterId')";
		$result= mysqli_query($conn,$sql1) or die(mysqli_error());
		$row=mysqli_fetch_array($result);

		if($row['voterId']>0){
			echo "you have already voted";
			header("location:access-denied.php");
		}else {

			$sql="UPDATE Party SET partyVoteCount=partyVoteCount+1 WHERE partyName='$partyName'";

			if (mysqli_query($conn, $sql)&& mysqli_query($conn,$sql2)) {
				echo "Your vote is successfull";
				header("location:suc.php");
			} else {
				echo "Error updating record: " . mysqli_error($conn);
			}		
		}



		// $sql="UPDATE Party SET partyVoteCount=partyVoteCount+1 WHERE partyName='$partyName'";
		// if (mysqli_query($conn, $sql)) {
		// 	echo "Your vote is successfull";
		// } else {
		// 	echo "Error updating record: " . mysqli_error($conn);
		// }

		mysqli_close($conn);
?>