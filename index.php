<?php 
	$code = $_GET['code'];
	$state = $_GET['state'];
	header('Location: mb://?code=' . $code . '&state=' . $state);
?>