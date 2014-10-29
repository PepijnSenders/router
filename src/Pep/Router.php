<?php

namespace Pep;

use Illuminate\Support\Facades\Route;
use Symfony\Component\Yaml\Yaml;

class Router {

  public function __construct($file) {
    $parsed = Yaml::parse(file_get_contents($file));
    dd($parsed);
  }

}