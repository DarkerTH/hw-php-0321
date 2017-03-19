<?php
/**
 * Created by PhpStorm.
 * User: darker
 * Date: 17.3.19
 * Time: 15.34
 */

ini_set('display_errors', 'on');

require_once('autoload.php');

$hogwarts = new Hogwarts();
$professor = new Hogwarts\Professor();
$student = new Hogwarts\Student();

$professorSchedule = new \Hogwarts\Professor\Schedule();
$studentSchedule = new \Hogwarts\Student\Schedule();