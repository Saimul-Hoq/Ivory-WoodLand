<?php

require_once(__DIR__."/../config/database.inc.php");
require_once(__DIR__."/../models/getUser_model.inc.php");

function getUserFromModel($pdo, $id){
    return getUser($pdo, $id);
}