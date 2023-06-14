<?php
/**
 * @file manager.php
 * @brief File description
 * @author Created by Julian.PEREZ
 * @version 08.06.2023
 */

require "dbConnector.php";

function verifyInformation($email)
{
    $queryCheck = 'SELECT email FROM members WHERE email="' . $email . '"';
    $check = executeQuerySelect($queryCheck);
    if (isset($check[0])) {
        $result = false;
    } else {
        $result = true;
    }
    return $result;
}
function getRegisterData($email, $mdp)
{
    $userPwdHash = password_hash($mdp, PASSWORD_DEFAULT);

    $registerQuery = "INSERT INTO members(email, password)";
    $registerQuery = $registerQuery . 'VALUES ("'. $email .'", "'. $userPwdHash .'")';
    $results = executeQueryInsertUpdate($registerQuery);
    return $results;
}

function IsLoginCorrect($email, $mdp)
{
    $result = false;

    $query = "SELECT password from members where email = '$email'";
    $queryResult = executeQuerySelect($query);

    if (count($queryResult) == 1) {
        $userHashPwd = $queryResult[0]['password'];
        $result = password_verify($mdp, $userHashPwd);
    }
    return $result;
}

function createSession($email, $mdp) {
    $_SESSION["email"] = $email;
    $_SESSION["mdp"] = $mdp;
 }