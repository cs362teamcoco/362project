<?php
require_once('_includes/database.php');
// this file will process the search request
if (isset($_POST['search'])){
	// search for item, return results
	echo "Your search results! <br /> <a href='index.php'>Back</a>";
}
?>