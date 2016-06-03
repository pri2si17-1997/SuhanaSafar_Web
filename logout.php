<?php
	session_start();
	session_destroy();
	$redirect_page = 'index.html';
	$redirect = true;
	if($redirect == true)
	{
		header('Location: '.$redirect_page);
	}
?>