<?php
/**
 * @file dbConnector.php
 * @brief File description
 * @author Created by Matteo.DA-CUNHA
 * @version 08.02.2023
 */

function openDBConnection(){
    //connexion au serveur de la bd
    // // à la bd

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3307;
    $charset = 'utf8';
    $dbName = 'valoblog';
    $userName = 'valoblog';
    $userPad = 'Pa$$w0rd';
    $dsn = $sqlDriver.':host='.$hostname.';dbname='.$dbName.';port='.$port.';charset='.$charset;

    try{
        $tempDBConnexion = new PDO($dsn, $userName, $userPad);
    }
    catch (PDOException $exception){
        echo 'Connection failed'.$exception->getMessage();
    }
    return $tempDBConnexion;
}

//function to execute query select
function executeQuerySelect($query){
    $queryResult = null;

    $dbConnection= openDBConnection(); // Ouvre la connexion à la db
    if($dbConnection!= null){
        $statement = $dbConnection->prepare($query); // Préparation de la requête
        $statement->execute();                      // Execution de la requête
        $queryResult = $statement->fetchAll();      // Prépare les résultats de la requête
    }
    $dbConnection = null; // fermeture de la connexion à la db
    return $queryResult;
}

function executeQueryInsertUpdate($query){
    $queryResult = null;

    $dbConnection= openDBConnection(); // Ouvre la connexion à la db
    if($dbConnection!= null){
        $statement = $dbConnection->prepare($query); // Préparation de la requête
        $queryResult = $statement->execute();                      // Execution de la requête
    }
    $dbConnection = null; // fermeture de la connexion à la db
    return $queryResult;
}

