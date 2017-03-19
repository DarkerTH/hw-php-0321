<?php
/**
 * Created by PhpStorm.
 * User: darker
 * Date: 17.3.19
 * Time: 15.34
 */

ini_set('display_errors', 'on');

require_once('autoload.php');

use \Hogwarts\Professor;

$hogwarts = new Hogwarts();
$professor = new Professor();
$student = new Hogwarts\Student();

$professorSchedule = new Professor\Schedule();
$studentSchedule = new \Hogwarts\Student\Schedule();