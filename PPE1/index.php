<?php
session_start();
require_once("modele/class.pdoforum.inc.php");
require_once("modele/class.clubs.inc.php");
require_once("modele/class.comite.inc.php");
require_once("modele/class.connexion.inc.php");
require_once("modele/class.emplacement.inc.php");
require_once("modele/class.reservation.inc.php");
require_once("modele/class.reserve.inc.php");
require_once("modele/class.profil.inc.php");
if(!isset($_REQUEST['uc']))
     $uc = 'connexion';
else
	$uc = $_REQUEST['uc'];

switch($uc)
{
	case 'connexion':
		{
            include("controleurs/c_connexion.inc.php");
            break;
        }
	case 'club':
	case 'listeclub':
		{
            include("controleurs/c_club.inc.php");
            break;
		}
    case 'profil':
    case 'listeprofil':
        {
            include("controleurs/c_profil.inc.php");
            break;
        }
	case 'comite':
	case 'listecomite':
		{
            include("controleurs/c_comite.inc.php");
            break;
		}
	case 'emplacement':
	case 'listeemplacement':
		{
            include("controleurs/c_emplacement.inc.php");
            break;
		}
	case 'reservation':
		{
            include("controleurs/c_reservation.inc.php");
            break;
		}
	case 'creerclub' :
		{
            include("controleurs/c_creerclub.inc.php");
            break;
        }
    case 'creerprofil' :
        {
            include("controleurs/c_creerprofil.inc.php");
            break;
        }
	case 'creercomite' :
		{
            include("controleurs/c_creercomite.inc.php");
            break;
        }
	case 'creeremplacement' :
		{
            include("controleurs/c_creeremplacement.inc.php");
            break;
        }
	case 'creerreserv' :
		{
            include("controleurs/c_creerreserv.inc.php");
            break;
        }
    case 'menu':
		{
            include("controleurs/c_menu.inc.php");
            break;
        }
    case 'modifclub':
		{
            include("controleurs/c_modifclub.inc.php");
            break;
        }
    case 'modifprofil':
        {
            include("controleurs/c_modifprofil.inc.php");
            break;
        }
	case 'modifcomite' :
		{
            include("controleurs/c_modifcomite.inc.php");
            break;
        }
	case 'modifemplacement' :
		{
            include("controleurs/c_modifemplacement.inc.php");
            break;
        }
	case 'reserveemplacement' :
		{
            include("controleurs/c_reserveemplacement.inc.php");
            break;
        }
    case 'reservehoraire':
        {
            include("controleurs/c_reservehoraire.inc.php");
            break;
        }
    case 'supprhoraire':
        {
            include("controleurs/c_supprhoraire.inc.php");
            break;
        }
    case 'creerhoraire':
        {
            include("controleurs/c_creerhoraire.inc.php");
            break;
        }
    case 'supprclub' :
        {
            include("controleurs/c_supprclub.inc.php");
            break;
        }
    case 'supprprofil' :
        {
            include("controleurs/c_supprprofil.inc.php");
            break;
        }
    case 'supprcomite' :
        {
            include("controleurs/c_supprcomite.inc.php");
            break;
        }
    case 'suppremplacement' :
        {
            include("controleurs/c_suppremplacement.inc.php");
            break;
        }
    case 'supprreservation' :
        {
            include("controleurs/c_supprreservation.inc.php");
            break;
        }
    case 'plan':
        {
            include("controleurs/generer_pdf.php");
            break;
        }
	default : {
			include("controleurs/c_connexion.inc.php");
            break;
		}
		
}
?>

