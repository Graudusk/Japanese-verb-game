<?php
	include('functions.php');
	if(isset($_POST['action']) && !empty($_POST['action'])) {
	  $action = $_POST['action'];
	  switch($action) {
	    case 'check' : 
	  		echo json_encode(func::check($_POST['word']));
	  		break;
	    case 'show' : 
	    	session_start();
	  		echo json_encode($_SESSION['curr']);
	  		break;
	    case 'refresh' : 
	    	echo func::refresh();
	    	break;
	  }
	}
?>