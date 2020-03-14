<?php

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

session_start();


// message
$name = isset($_POST["Editbox1"]) ? $_POST["Editbox1"] : "";
$name = iconv ('utf-8', 'windows-1251', $name);
$kod = isset($_POST["Editbox2"]) ? $_POST["Editbox2"] : "";
$email = isset($_POST["Editbox3"]) ? $_POST["Editbox3"] : "";
$source = isset($_POST["Editbox4"]) ? $_POST["Editbox4"] : "";
$medium = isset($_POST["Editbox5"]) ? $_POST["Editbox5"] : "";
$campaign = isset($_POST["Editbox6"]) ? $_POST["Editbox6"] : "";
$produkt = isset($_POST["Editbox7"]) ? $_POST["Editbox7"] : "";

        

// Sending
mail('info@bdauto.lv', 'Заявка с Landing Page полировка LV', $name . "\n" . $kod . "\n" . $email . "\n" . $source . "\n" . $medium . "\n" . $campaign . "\n" . $produkt);
?>
<body>
<div class="main_block">
	<div id="bg">
		<div class="container">
			<h1 style="font-size: 35px;" class="h1">Thank you for submitting our form!<br />We will contact you as soon as possible.</h1>
		</div>
	</div>
</div>
</body>
</html>