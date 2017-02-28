<?php

/**
 * Created by PhpStorm.
 * User: tripleheader
 * Date: 2/28/17
 * Time: 5:42 PM
 */
abstract class AbstractClass implements MyInterface
{

    abstract protected function aAbsFunction();
    abstract public function anOther();
    public function tryMe(){
        return "This is a non-abstract method in abstract class";
    }

}