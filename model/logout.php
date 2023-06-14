<?php

function sessionEnd() {
    $_SESSION = array();
    session_destroy();
}