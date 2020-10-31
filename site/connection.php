 <?php
$con=new mysqli("localhost","root","Vamshisql@003","useraccounts");
if(!$con)
{
	die('Please Check your Connection'.mysqli_error($con));
}

?>