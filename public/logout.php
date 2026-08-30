<?php
require_once(__DIR__."/../app/config/session.inc.php");

$_SESSION = [];
session_destroy();

header("Location: login.php");
exit();