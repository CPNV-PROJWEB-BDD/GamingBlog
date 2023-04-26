 <?php

session_start();
require "controler/navigation.php";

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
      case 'Home':
          Home();
          break;
      case 'Weapons':
          Weapons();
          break;
      case 'Maps':
          Maps();
          break;
      case 'Characters':
          Characters();
          break;
      case 'Game':
          Game();
          break;
      case 'Login':
          Login();
          break;
      case 'Password':
          Password();
          break;
      case 'Register':
          Register();
          break;
      default:
          Lost();
      }
    }
else {
    home();
}