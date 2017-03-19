<?php

/**
 * Created by PhpStorm.
 * User: darker
 * Date: 17.3.19
 * Time: 13.47
 */
class Magic
{
    private $data = [];

    public $person = 'Nobody';

    private $spell = 'Expelliarmus';

    public function __construct()
    {

        echo "[" . __FUNCTION__ . "] Constructed. <br />";
    }

    public function __call($name, $arguments)
    {

        echo "[" . __FUNCTION__ . "] Object method <b>" . $name . "</b> called with argument(-s) <b>" . implode(', ', $arguments) . "</b> <br />";
    }

    public static function __callStatic($name, $arguments)
    {

        echo "[" . __FUNCTION__ . "] Static method <b>" . $name . "</b> called with argument(-s) <b>" . implode(', ', $arguments) . "</b> <br />";
    }

    public function __set($name, $value)
    {
        echo "[" . __FUNCTION__ . "] Setting " . $name . " to " . $value . "<br />";

        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "[" . __FUNCTION__ . "] Getting " . $name . "<br />";

        if (array_key_exists($name, $this->data))
            return $this->data[$name];

        return "Undefined property: " . $name . "<br />";
    }

    public function __isset($name){

        echo "[" . __FUNCTION__ . "] Checking if " . $name . " is set<br />";
        echo "Is " . $name . " set? " . (isset($this->data[$name]) ? "Yes" : "No") . "<br />";

    }

    public function __unset($name){

        echo "[" . __FUNCTION__ . "] Unsetting " . $name . "<br />";

        if (array_key_exists($name, $this->data))
            unset($this->data[$name]);

    }

    public function __sleep(){

        echo "[" . __FUNCTION__ . "] It's getting late...<br />";

        $vars = (array)$this;
        foreach ($vars as $key => $val)
        {
            if (is_null($val))
            {
                unset($vars[$key]);
            }
        }
        return array_keys($vars);
    }

    public function __wakeup(){

        echo "[" . __FUNCTION__ . "] Come on, it's 6 AM!<br />";

    }

    public function __toString(){

        echo "[" . __FUNCTION__ . "] Converting to string<br />";
        return $this->person . ' knows a spell named "' . $this->spell . '".<br />';
    }

    public function __invoke($value){

        echo "[" . __FUNCTION__ . "] Trying to call an object...<br />";
        echo "Don't you dare to call me again! I know that spell <b>" . $value . "</b><br />";
    }

    public static function __set_state($array){

        echo "[" . __FUNCTION__ . "] Exporting an object.<br />";

        $newObject = new Magic;
        foreach ($array as $key => $value){
            $newObject->{$key} = $value;
        }
        return $newObject;

    }

    public function __debugInfo() {

        echo "[" . __FUNCTION__ . "] Debugging.<br />";

        return $this->data;
    }

    public function __destruct()
    {

        echo "[" . __FUNCTION__ . "] Desctructed. <br />";
    }
}