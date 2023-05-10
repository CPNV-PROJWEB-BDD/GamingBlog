<?php

function home()
{
    require "view/home.php";
}

function displayRegisterForm()
{
    require 'view/index.php';
}

function displayRegisterPHP($GiveFormular)
{
    require 'model/registerphp.php';
    DataRegisterPHP($GiveFormular);
}

function lost()
{
    require "view/content/lost.php";
}

function getWeapons()
{
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/armes.php";
    }
}

function getMaps()
{
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/cartes.php";
    }
}

function getCharacters()
{
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/personnages.php";
    }
}

function getGame()
{
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/jeu.php";
    }
}

function forgetPassword()
{
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/password.php";
    }
}