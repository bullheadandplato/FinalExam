<?php

/**
 * Created by PhpStorm.
 * User: tripleheader
 * Date: 2/28/17
 * Time: 6:35 PM
 */
class OverLoaded
{
    var $var=10;
    function __clone()
    {
        return "Someone is going to clone me...ehhh";
    }
    function __get($name)
    {
        return "An undefined property has been tried to access.";
    }
    function __isset($name)
    {
        return "isset() called on undefined property";
    }
    function __invoke()
    {
        return "An object of me treated as function.";
    }
    function __unset($name)
    {
        return "unset(val) called on undefined value";
    }
    function __wakeup()
    {
        return "Yooo! I'm un-serialized";
    }
    function __set($name, $value)
    {
        $this->var= "Someone is setting an undefined property";
    }
    function __sleep()
    {
        return "Woo! I'm going to be serialized";
    }
    function __call($name, $arguments)
    {
        return "WTF! I have no method named { $name }  having arguments { $arguments }";
    }
    static function __callStatic($name, $arguments)
    {
        return "WTF! I have no static method named { $name }  having arguments { $arguments }";
    }

    /**
     * @return mixed
     */
    public function getVar()
    {
        return $this->var;
    }

}