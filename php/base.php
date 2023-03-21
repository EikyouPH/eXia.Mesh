<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: index.php");
  exit;
}
require '../php/connect.php';

// On démarre Smarty AVANT d'écrire du code HTML	
require '../vendor/autoload.php';

// Creer un objet Smarty
$smarty = new Smarty();

// Definir les chemins des templates
$smarty->setTemplateDir('../tpl/');
?>