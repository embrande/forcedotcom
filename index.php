<?php
	session_start();
	$_SESSION['parentID'] = $_GET['id'];
	header( 'Location: oauth.php' ) ;
?>