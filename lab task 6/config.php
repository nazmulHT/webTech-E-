<?php

//ob_start();

//session_start();
//session_destroy();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("templateFront") ? null : define("templateFront", __DIR__ . DS . "template/front");
defined("templateBack") ? null : define("templateBack", __DIR__ . DS . "template/back");
defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "upload");

//defined("db_host") ? null : define("db_host", "localhost");
/*defined("db_user") ? null : define("db_user", "root");
defined("db_pass") ? null : define("db_pass", "");
defined("db_name") ? null : define("db_name", "ecom");

$connection = mysqli_connect(db_host, db_user, db_pass, db_name);

require_once("function.php");*/

?>