<?php
	// Display total cart value
	if(isset($_GET['value'])) {
		echo $_GET['value'];
	}
	else {
		echo '0.00';
	}
?>
