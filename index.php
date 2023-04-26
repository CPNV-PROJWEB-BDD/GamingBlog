 <?php

session_start();
require "controler/navigation.php";

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
      case 'home' :
          home();
          break;
      case 'getWeapons':
          getWeapons();
          break;
      case 'getMaps' :
          getMaps();
          break;
      case 'getCharacters' :
          getCharacters();
          break;
      case 'getGame' :
          getGame();
          break;
      case 'login':
          login();
          break;
      case 'forgetPassword':
          forgetPassword();
          break;
      case 'register':
          register();
          break;
      default :
          lost();
      }
    }
else {
    home();
}