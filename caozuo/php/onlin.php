<?php
	header('Content-type:text/html;charset=utf-8');
	include_once 'fun.php';
	$conn = connectDb();

	$sql = "SELECT * FROM onlin_user";
	$res = mysqli_query($conn,$sql);
	$user_N=$_POST['user_N'];
	$user_P=$_POST['user_P'];

	$Asuli = [];
	while ( $resultArr = mysqli_fetch_assoc($res) ) {
	 	$valuename = $resultArr['userName'];
	 	$valuepass = $resultArr['userPass'];
	 	if ($valuename == $user_N) {
	 		
	 		if ($valuepass == $user_P) {	
	 			echo 1;
	 		}else{
	 			
	 			echo 2;
	 		}

	 		break;
	 	}else{
	 		echo 3;
	 	}
	 }
