<?php

require_once('connection.php');
session_start();
if(isset($_POST['login']))
{
	if(empty($_POST['user'])|| empty($_POST['pass']))
	{
      header("location:login.php?Empty=Please Enter Fill in the blanks");
	}
	else
	{
      $query="SELECT * from login where username='".$_POST['user']."' and password='".$_POST['pass']."'";
      $result=mysqli_query($con,$query);
      if(mysqli_fetch_assoc($result))
      {
      	$_SESSION['User']=$_POST['user'];
      	header("location:ZPHS2.php");
      }
      else
      {
      	header("location:login.php?Invalid= Please Enter Correct User Name and Password");
      }

	}

}
else
{
	echo 'not working';
}

?>