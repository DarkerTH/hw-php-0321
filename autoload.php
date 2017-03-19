<?php
/**
 * Created by PhpStorm.
 * User: darker
 * Date: 17.3.19
 * Time: 15.46
 */

function autoload ($class) {
    $class = str_replace('\\', '/', $class);
    $fileName = @end(explode('/', $class));

    require_once(__DIR__ . "/vendor/" . $class . "/".$fileName.".php");
}
spl_autoload_register("autoload");