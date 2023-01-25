<?php
	$EnrollNo=$_REQUEST['EnrollNo'];
	$Pass=$_REQUEST['Pass'];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("registration");
	$query="select * from student WHERE EnrollNo='$EnrollNo' && Pass='$Pass'";
	$sql1=mysql_query($query);
	$row = mysql_fetch_array($sql1);
	if($row['EnrollNo'] == $EnrollNo && $row ['Pass'] == $Pass ) 
	{
    		session_start();
    		$_SESSION['Login']=$EnrollNo;
    		header("location:page3.php");
  	}
  	else
  	{
      		echo "User Name and Password is incorrect";
  	}
	?>

