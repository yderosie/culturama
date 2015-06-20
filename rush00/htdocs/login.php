<?php
	session_start();
?>
<html><body>
<form method="post" action="log.php">
	Identifiant: <input type="text" name="login" placeholder="login" />
	<br />
	Mot de passe: <input type="password" name="passwd" placeholder="password"/>
	<input type="submit" value="OK" />
</form>
</body></html>