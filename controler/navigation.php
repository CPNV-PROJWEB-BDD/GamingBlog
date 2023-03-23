<?php

function home(){
    require "view/home.php";
}

function displayRegisterForm(){
    require 'view/index.php';
}

function displayRegisterPHP($GiveFormular){
    require 'model/registerphp.php';
    DataRegisterPHP($GiveFormular);
}

function lost(){
    require "view/content/lost.php";
}

function displayArmes(){
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/armes.php";
    }
}

function displayCartes(){
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/cartes.php";
    }
}

function displayPersonnages(){
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/personnages.php";
    }
}

function displayJeu(){
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/jeu.php";
    }
}

function displayLogin(){
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/login.php";
    }
}

function displayPassword(){
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/password.php";
    }
}

function displayRegister(){
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/register.php";
    }
}

