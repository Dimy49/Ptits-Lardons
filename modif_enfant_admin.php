<?php
session_start();
include_once('class/autoload.php');


$site = new page_base_securisee_admin('Modif enfant');
$site->js='jquery.validate.min';
$site->js='messages_fr';
$site->js='jquery.tooltipster.min';
$site->style='tooltipster';
$site->style='perso';


$controleur=new controleur();
$site-> right_sidebar=$site-> rempli_right_sidebar();
$site-> left_sidebar=$controleur->affiche_liste_enfant('Modif');
if (isset($_POST["nom_checkbox"])){
foreach ($_POST["nom_checkbox"] as $index => $value){
	$site-> left_sidebar=$controleur->retourne_formulaire_enfant('Modif',$value);
	$_SESSION['id_enfant']=$value;
	break;
}
}

$site->affiche();

?>