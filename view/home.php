<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
 */

// tampon de flux stocké en mémoire
ob_start();
$title="ValoBlog - Accueil";
?>



<?php
  $content = ob_get_clean();
  require "gabarit.php";
