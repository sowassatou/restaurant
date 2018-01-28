<?php
session_start();
	$host="localhost";
	$user="root";
	$mdp="";
	$db="db_resto";
	$link=mysqli_connect($host,$user,$mdp);
	mysqli_select_db($link,$db);


 ?>