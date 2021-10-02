<?php


define (DB_USER, "root");
define (DB_PASSWORD, "");
define (DB_DATABASE, "rdubibuz_corousal");
define (DB_HOST, "localhost:3306");


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
?>