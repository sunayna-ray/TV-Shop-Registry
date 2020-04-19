<?php 

$user=$_POST["user"];
$pass= $_POST["pass"];
if ($user == "Admin" && $pass == "tv")
{
echo "Welcome";	
header("Location: Hi.php");
}
else{
	header("Location: Bye.php");
}

?>
