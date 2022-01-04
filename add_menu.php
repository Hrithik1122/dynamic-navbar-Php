<?php 

if (isset($_POST['submit'])) {

	require_once 'db.php';

	$created = add_new_menu_item($_POST);

	if ($created) {
		header('location: index.php?success=Menu created Successfully!');
	}
	else{
		header('location: index.php?error=Error occured while creating menu');
	}
}

else{
	header('location: index.php');
}

?>