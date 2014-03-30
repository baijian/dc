<?php
namespace Baijian\Dc;

use Fluent\Autoloader,
    Fluent\Logger\FluentLogger,
    Fluent\Logger\HttpLogger;

class FooLog {

    public function __init(){
        Fluent\Autoloader::register();
    }

    public static function posttcplog($tag, $log){
        $logger = new FluentLogger("localhost", "6000");
        $logger->post($tag, $log);
    }

    public static function posthttplog($tag, $log){
        $logger = HttpLogger::open("localhost", "7000");
        $logger->post($tag, $log);
    }
}
