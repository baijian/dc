<?php
require_once 'vendor/autoload.php';

use Fluent\Logger\FluentLogger,
    Fluent\Logger\HttpLogger;

Fluent\Autoloader::register();

$logger = new FluentLogger("localhost", "6000");
#$logger = HttpLogger::open("localhost", "7000");
$logger->post("foo.bar.xx", array("hello"=>"baijian"));
