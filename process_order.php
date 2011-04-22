<?php
require_once('_includes/database.php');
// this file will process the order
if (isset($_POST['order'])){
	// search for item, return results
	echo "Your order has been processed! <br /> <a href='index.php'>Back</a>";
}
?>