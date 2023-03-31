 <?php

session_start();
require "controler/navigation.php";

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
      case 'home' :
          home();
          break;
      case 'displayArmes' :
          displayArmes();
          break;
      case 'displayCartes' :
          displayCartes();
          break;
      case 'displayPersonnages' :
          displayPersonnages();
          break;
      case 'displayJeu' :
          displayJeu();
          break;
      case 'displayLogin':
          displayLogin();
          break;
      case 'displayPassword':
          displayPassword();
          break;
      case 'displayRegister':
          displayRegister();
          break;
      default :
          lost();
      }
    }
else {
    home();
}