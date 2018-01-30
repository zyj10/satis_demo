<?php
/**
 * Created by PhpStorm.
 * User: zouyj
 * Date: 2018/1/30
 * Time: 11:11
 */

// Autoload files using Composer autoload
require_once __DIR__ . '/../vendor/autoload.php';

use Hello\HelloWorld;

echo HelloWorld::say_hello();