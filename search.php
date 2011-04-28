<?php
require_once('_includes/database.php');
// this file will process the search request
if (isset($_GET['search'])){
	if (strcmp($_GET['search'], "") == 0){
		echo "Please enter something for me to search for.";
	}else{
		echo "I will search for '" . $_GET['search'] . "'";
	}
}
?>