<?php
	if (!file_exists('../private'))
	{
		return;
	}
	if (file_exists('../private/content'))
	{
		$tab = file_get_contents("../private/content");
		$tab = unserialize($tab);
	}
	else
		return;
	$i = 0;
	while ($tab[$i] != '')
	{
		echo  "<div class='cadre' style='display:inline-block; margin:20px;'>" . $tab[$i]['name'] . ":<br /><img src=\"" . $tab[$i]['image'] . "\"/>" . "<br /> " . $tab[$i]['description'] . "<br /> Stock:" . $tab[$i]['stock'] . "<br /> Prix:" . $tab[$i]['prix'] . "€</div>";
		$i++;
	}
?>