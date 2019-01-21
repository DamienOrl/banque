<?php 
require_once 'banque.php'; 
require_once 'debut-page.php'; 

echo '<pre>';
$fichier=$_GET['fichier'];
$servername = parse_url($fichier, PHP_URL_HOST);

if($servername != $_SERVER['REMOTE_HOST']){
	echo 'Loup√, ©connard!';
	exit();
}

require_once $fichier;
echo '</pre>';

require_once 'fin-page.php'; 

?>
