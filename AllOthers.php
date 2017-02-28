<?php

/**
 * Created by PhpStorm.
 * User: tripleheader
 * Date: 2/28/17
 * Time: 3:38 PM
 */
class AllOthers
{
    //constants
    const GOOGLE="google";

    /**
     * @return string. function with return typed explicitly defined
     */
    function google():string {
        return "Osama";
    }

    /**
     * @param $string reference to string
     * Modify actual value of the passed parameter
     */
    function passMeReference(&$string){
        $string.="This is added by function";
    }

    /**
     * @param string $name
     * @return string
     * default value function
     */
    function defaultValue($name="osama"){
        return "Hello, my name is ".$name;
    }

    /**
     * @param array ...$number
     * @return string
     * function which can accept any number of parameters
     */
    function listFunction(...$number){
        $sum=0;
        foreach ($number as $num){
            $sum+=$num;
        }
        return "Sum of value passed is: ".$sum;
    }

    /**
     * @return string
     * function return reference to a string.
     */
    function &returnRef(){
        $string="My reference will be returned.";
        return $string;
    }

    function variableExample(){
        $foo="callMe";
        return $this->$foo();
    }
    function callMe(){
        return "Im called from a variable name.";
    }
    function anonInMe(){
        $that=0;
        $var=function (&$that){
             $that="I'm an anonymous function";
        };
        $var($that);
        return $that;
    }
}