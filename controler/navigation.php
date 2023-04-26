<?php

function Home()
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

function Lost()
{
    require "view/lost.php";
}

function Weapons()
{
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/armes.php";
    }
}

function Maps()
{
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/cartes.php";
    }
}

function Characters()
{
    require "view\personnages.php";

}

function Game()
{
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/jeu.php";
    }
}

function Login()
{
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/login.php";
    }
}

function Password()
{
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/password.php";
    }
}

function Register()
{
    try {
        require_once "controler/navigation.php";
    } finally {
        require "view/register.php";
    }
}

