<?php

require "config.php";
require "functions.php";
require "database.php";
require "controller.php";
require "session.php";
require "model.php";
require "app.php";
require "fpdf184/fpdf.php";

spl_autoload_register(function ($class_name){
    require "../private/models/" . ucfirst($class_name) . ".php";
});