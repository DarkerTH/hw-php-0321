<?php

/**
 * Created by PhpStorm.
 * User: darker
 * Date: 17.3.19
 * Time: 13.47
 */
class Magic
{

    function __construct(){

        echo "__construct called.";
    }

    function __destruct(){

        echo "__destruct called.";
    }
}