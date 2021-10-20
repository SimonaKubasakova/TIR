/*<?php

	/*function kontrola($polozka)
	{
			$polozka = trim($polozka);
			$polozka = htmlspecialchars($polozka);
			stripcslashes($polozka);
			return $polozka;
	}

	date_default_timezone_set("Europe/Bratislava");
	if(trim($_POST['odpoved'])== $_POST['spravnaOdpoved'])
	{
		$suborPrispevky = fopen('prispevky.csv', 'a');

		$novyPrispevok[] = $_GET['pocet'] + 1;
		$novyPrispevok[] = trim($_POST['meno']);
		$novyPrispevok[] = trim($_POST ['sprava']);
		$novyPrispevok[] = date( 'Y-m-d H:i:s',time());

		fputcsv($suborPrispevky, $novyPrispevok, ';');
		fclose($suborPrispevky);

	}
	else
	{
		echo "zle";
	
	   header('Location:index.php');*/
?>