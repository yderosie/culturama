<?php
	session_start();

	date_default_timezone_set('Europe/Paris');
	if (($_POST['msg'] != '') && ($_SESSION['logued_on_user'] != '') /*&& ($_POST['submit'] != '')*/)
	{
		if (!file_exists('../private'))
		{
			mkdir('../private');
		}
		if (file_exists('../private/chat'))
		{
			$fd = fopen("../private/chat", 'r');
			flock($fd, LOCK_SH);
			$tab = file_get_contents("../private/chat");
			$tab = unserialize($tab);
			fclose($fd);
		}
		$i = 0;
		while ($tab[$i] != '')
			$i++;
		$sous_tab = array('login' => $_SESSION['logued_on_user'], 'time' => date('G:i'), 'msg' => $_POST['msg']);
		$tab[$i] = $sous_tab;
		$tab = serialize($tab);
		$fd = fopen("../private/chat", 'w');
		flock($fd, LOCK_EX);
		file_put_contents('../private/chat', $tab);
		fclose($fd);
	}
	else if ($_SESSION['logued_on_user'] == '')
	{
		echo "ERROR\n";
		return;
	}
?>
<html><body>
<form method="post" action="speak.php">
		<textarea name="msg" cols="265" height="50px"></textarea>
		<input type="submit" name="submit" value="Envoyer" />
</form>
</body></html>
