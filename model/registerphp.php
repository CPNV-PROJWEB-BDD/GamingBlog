<?php
/**
 * @file registerphp.php
 * @brief File description
 * @author Created by Matteo.DA-CUNHA
 * @version 22.02.2023
 */


$dataform = $_POST;


function DataRegisterPHP($GiveFormular)
{
    foreach ($GiveFormular as $DataFormular) {
        echo $DataFormular . "<br>";
    }
    echo "<br>" . 'Fin du script';
}

function extractRegister($arrayInputUserForm)
{

    $pseudo = $arrayInputUserForm['inputPseudo'];//How we can extract a value from an array using its name (refer to the form name given)

    $newRegisterTemp = array($pseudo);//TODO add missing register text field
    return $newRegisterTemp;
}

