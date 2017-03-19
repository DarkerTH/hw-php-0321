<?php
/**
 * Created by PhpStorm.
 * User: darker
 * Date: 17.3.19
 * Time: 13.59
 */
ini_set('display_errors', 'On');

require_once('Magic.php');

$magic = new Magic();
separate();
// Calls
$magic->setPerson('Harry Potter');
Magic::setPerson('Harry Potter');

separate();
// Set/get
$magic->person = 'Harry Potter';

$magic->spell = 'Expecto patronum';
echo $magic->spell.'<br />';

separate();
// Isset/unset
isset($magic->spell);
unset($magic->spell);
isset($magic->spell);

$magic->spell = 'Oculus reparo';

separate();
// Sleep/wakeup
$magic = serialize($magic);
isset($magic->spell);

$magic = unserialize($magic);
isset($magic->spell);

separate();
//toString
echo $magic;

separate();
//invoke
$magic('Sectumsempra');

separate();
//Set state
eval('$newMagic = ' . var_export($magic, true) . ';');
$newMagic->person = 'Voldemort';
echo $newMagic->person . "<br />";
echo $magic->person. "<br />";

separate();

//Debug
var_dump($magic);

separate();

function separate(){
    echo "<hr/>";
}