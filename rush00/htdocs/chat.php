<?php
	session_start();

	date_default_timezone_set('Europe/Paris');
	if (file_exists('../private/chat'))
	{
		$fd = fopen("../private/passwd", 'r');
		flock($fd, LOCK_SH);
		$tab = file_get_contents("../private/chat");
		$tab = unserialize($tab);
		fclose($fd);
	}
	$i = 0;
	while ($tab[$i] != '')
	{
		echo "[" . $tab[$i]['time'] ."] " . "<b>" . $tab[$i]['login'] . "</b>: " . $tab[$i]['msg'] . "<br/>\n";
		$i++;
	}
?>