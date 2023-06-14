<?php

function home(): void
{
    require "view/home.php";
}

function lost(): void
{
    require "view/lost.php";
}

function maps()
{
    try {
        require_once "controller/navigation.php";
    } finally {
        require "view/maps.php";
    }
}

function game()
{
    try {
        require_once "controller/navigation.php";
    } finally {
        require "view/game.php";
    }
}

function forgetPassword()
{
    try {
        require_once "controller/navigation.php";
    } finally {
        require "view/password.php";
    }
}

function logout()
{
    try {
        require "model/logout.php";
        sessionEnd();
    } finally {
        require "view/home.php";
    }
}
