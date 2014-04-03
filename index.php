<?php
require_once 'vendor/autoload.php';

use Fluent\Logger\FluentLogger,
    Fluent\Logger\HttpLogger;

//you can use the code below or you can use Foo.php wrapper lib
Fluent\Autoloader::register();
$logger = new FluentLogger("localhost", "6000");
#$logger = HttpLogger::open("localhost", "7000");
$logger->post("foo.bar.xx", array("hello"=>"baijian"));
