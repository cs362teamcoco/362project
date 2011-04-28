<?php
	// process login info
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="_js/jquery-1.5.2.js"></script>
	<script type="text/javascript" src="_js/ajax.js"></script>
	<link rel="stylesheet" type="text/css" href="_css/main.css" />
	<title>CS362 Project</title>
</head>
<body>

	<div id="wrapper" class="shadow">
		<div id="header">
			<div id="login_section">
				<form id="login_form" action="admin.php" method="POST" accept-charset="utf-8">
					<label for="username">Username</label><input type="text" name="username" value="" id="username">
					<label for="password">Password</label><input type="password" name="password" value="" id="password">
					<input type="submit" value="Login">
				</form>
			</div> <!-- end of login_section -->
			<h1 class="clear">CONAN</h1>
		</div> <!-- end of header div -->
		
		<div id="main">
			<div id="search_area">
				<form id="search_form" name="search_form" action="" method="POST" accept-charset="utf-8">
					<label for="search">Search</label><input type="text" name="search" value="" id="search">
					<button type="button" onclick="SearchForItem(document.search_form.search.value.toLowerCase())">Find my Item</button>
				</form>
			</div> <!-- end of search_area div -->
			<div id="search_results" class="shadow"></div>
		</div> <!-- end of main div -->
		
		
		<div id="footer">
			<div class="rights">Copyright &copy; 2011, Conan. All Rights Reserved.</div>
		</div> <!-- end of footer div -->
	</div> <!-- end of wrapper div -->
	

</body>
</html>