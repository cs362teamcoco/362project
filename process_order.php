<?php
require_once('_includes/database.php');
// this file will process the order
if (isset($_POST['name'])){
	// search for item, return results
	echo "Your order has been processed! <br /> <a href='index.php'>Back</a>";
}
?>
<html>
<head>
	<title>Purchase Item</title>
</head>

<body>
	<form id="purchase_item_form" action="process_order.php" method="POST" accept-charset="utf-8">
		<label for="name">Name</label><input type="text" name="name" value="" id="name">
		<p><input type="submit" value="Order Item"></p>
	</form>
</body>
</html>
