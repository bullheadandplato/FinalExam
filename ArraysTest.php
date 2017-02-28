<?php

/**
 * Created by PhpStorm.
 * User: tripleheader
 * Date: 2/28/17
 * Time: 1:06 PM
 */
class ArraysTest
{
    /**
     * @return array in key-value pair form
     */
    function keyValueArray(){
        $arr=array(
            'title'=> 'Osama',
            'class'=>'BSCS',
            'roll'=>"Google",
            "yoo"=>130
        );
        return $arr;
    }

    /**
     * @return array in indexed form
     */
    function indexedArray(){
        $arr=array("Osama","google","Man","Php");
        return $arr;
    }

    /**
     * @return array which is multidimensional
     */
    function multiDimensionArray(){
        $embedArray=array("Google","Man","Computer");
        $arr=array(
            array("Osama"=> $embedArray),
            array("Hussnain"=>$embedArray),
            array("Asad"=>"Google","Man","Circuits")
        );
        return $arr;
    }

    /**
     * @return string which express the complex syntax
     * complex syntax -> {$myarray[index]} in a string.
     */
    function arrayComplexSyntax(){
        $arr=array("This","Array","is"=>array("multi", "indexed","key value"));
        $string="This is the example of complex sentence.
         Array is {$arr[0]} {$arr[1]} {$arr['is'][0]} {$arr['is'][1]} {$arr['is'][2]}";
        return $string;
    }
}