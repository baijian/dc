<?php
namespace Baijian\Dc;

use Fluent\Autoloader,
    Fluent\Logger\FluentLogger,
    Fluent\Logger\ConsoleLogger,
    Fluent\Logger\HttpLogger;

class Foo {

    public function __init(){
        Fluent\Autoloader::register();
    }

    public function posttcplog($tag, $log){
        $tag = 'foo.bar';
        $log = array("hello"=>"world");
        $logger = new FluentLogger("localhost", "8888");
        $logger->post($tag, $log);
    }

    public function posthttplog($tag, $log){
        $logger = HttpLogger::open("localhost", "8889");
        $logger->post($tag, $log);
    }

    public function postconsolelog($tag, $log){
        $logger = new ConsoleLogger();
        $logger->post($tag, $log);
    }


}
