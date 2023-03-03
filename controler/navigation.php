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