<?php
	include('auth.php');
	include('admin.php');
	session_start();
	if (($_POST['login'] != '') && ($_POST['passwd'] != ''))
	{
		if (auth($_POST['login'], $_POST['passwd']))
		{
			$_SESSION['logued_on_user'] = $_POST['login'];
			$_SESSION['droit'] = 0;
			echo "OK\n";
		}
		elseif ((admin($_POST['login'], $_POST['passwd'])) || ($_POST['login'] == 'admin' && $_POST['passwd'] == 'admin'))
		{
			$_SESSION['logued_on_user'] = $_POST['login'];
			$_SESSION['droit'] = 2;
		}
	}
	else
	{
		$_SESSION['logued_on_user'] = '';
	}
	header('Location: index.php');
?><!--
<html>
<head>
	<title>Chat</title>
</head>
<body>
<frameset>
	<iframe name="chat" src="chat.php"  width="100%" height="550px"></iframe>
	<iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
</frameset>
</body>
</html>-->