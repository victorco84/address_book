<?php
include 'header.php';
?>

<body>
	<form action="/input.php" method="GET">
		First Name: <input type="text" name="first_name">
		Last Name: <input type="text" name="last_name">
		Email: <input type="text" name="email">
		Phone: <input type="text" name="phone">
		Fax: <input type="text" name="fax">
		<input type="submit">
	</form>
</body>