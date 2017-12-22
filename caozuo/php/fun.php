<?php
	define('MYSQL_SERVE','localhost');
	define('MYSQL_USER','root');
	define('MYSQL_PWD','123456');
	define('DATABASE', 'de_table');

	function connectDb(){
		$conn=mysqli_connect(MYSQL_SERVE,MYSQL_USER,MYSQL_PWD,DATABASE);
		if($conn){
			mysqli_query($conn,'set names utf8');//字符集 
			return $conn;
		}
	}