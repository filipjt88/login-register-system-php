<?php $title = "Home"; 
require("../core/init.php");



if(!isLogged()) {
    header("Location: /reg-log-system/index.php");
}


$user = getUser($_SESSION["id"]);

require("./views/home.view.php");
?>