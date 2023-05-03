 <?php

session_start();
 require "controler/navigation.php";
 require "controler/user.php";

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
      case 'forgetPassword':
          forgetPassword();
          break;
      case 'register':
          register($_POST);
          break;
      case 'login':
          login($_POST);
          break;
      default :
          lost();
      }
    }
else {
    home();
}