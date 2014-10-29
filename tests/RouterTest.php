<?php

use Pep\Router;

class RouterTest extends PHPUnit_Framework_TestCase {

  public function testRouter() {
    $router = new Router(__DIR__ . '/test.yaml');
  }

}