
<?php

include 'configure.php';

session_start();//session started 



if (isset($_SESSION['doctor'])) {
    
    header("Location:../search.php");//if session is already estblished then directed to one page
}

if (isset($_POST['submit'])) {
    
    $username=$_POST['dname'];
    $password=md5($_POST['dpass']);

	
	$sql = "SELECT * FROM doctor WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['doctor'] = $row['username'];

		header("Location:../search.php");//if username and password matches then directed towards another page
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		$errors['login'] = "Woops! Email or Password is Wrong.";

        header("Location: ../first.php?error=".serialize($errors));
	}
}
else{
	$errors['login'] = "You can't access directly!!.";
	header("Location: ../first.php?errors=".serialize($errors));
}
?>