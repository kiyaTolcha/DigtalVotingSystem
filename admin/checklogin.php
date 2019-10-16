<!DOCTYPE html>
<html>
<body style="background-color:powderblue;">

<?php
session_start();
$email=$_POST['myusername'];
$pass=$_POST['mypassword'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voteDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT email FROM Admin where email='$email' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    // while($row = mysqli_fetch_assoc($result)) {
    //     echo " - Name: " .$row["email"]." "."<br>";
    // }
    $user = mysqli_fetch_assoc($result);
   $_SESSION['adminId'] = $user['adminId'];
    
                if(isset($_POST['remember']))
                {
                    setcookie('$email',$_POST['myusername'], time()+30*24*60*60); // 30 days
                    setcookie('$pass', $_POST['mypassword'],time()+30*24*60*60); // 30 days
                    $_SESSION['curname']=$email;
                    $_SESSION['curpass']=$pass;

                    $user1 =mysqli_fetch_assoc($result);
     				$_SESSION['adminId'] = $user['adminId'];

                    header("Location:admin.php");
                    exit;

}else
{
    $log1=11;
    $_SESSION['log1'] = $log1;
    $_SESSION['curname']=$user;
    $_SESSION['curpass']=$pass;

    $user1 = mysqli_fetch_assoc($result);
    $_SESSION['admin_id'] = $user['admin_id'];

    header("Location:admin.php");
    exit;
} 


}else{
    echo "<br> <br> <br> ";
    echo "<center> <h3>Wrong Username or Password<br><br>Return to <a href=\"index.php\">login</a> </h3></center>";
}



// else {
//     echo "0 results";
// }

mysqli_close($conn);
?>





</body>
</html>