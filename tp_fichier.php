<?php


$id=fopen("etudiant.txt","a");
if($id===false)
die("erreur");
else{
flock($id,LOCK_EX);//LOCK_SH 
fwrite($id,"bonjour gk");
flock($id,LOCK_UN);
$r=fclose($id);
if($r===false)die("erreurrrr");

}
?>