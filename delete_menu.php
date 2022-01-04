<?php 

if (isset($_POST['submit'])) {

	require_once 'db.php';

	$deleted = delete_menu_item($_POST);

	if ($deleted) {
		header('location: index.php?success=Menu deleted Successfully!');
	}
	else{
		header('location: index.php?error=Error occured while deleting menu');
	}
}

else{
	header('location: index.php');
}

?>