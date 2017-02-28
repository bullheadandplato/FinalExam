<?php

/**
 * Created by PhpStorm.
 * User: tripleheader
 * Date: 2/28/17
 * Time: 12:41 PM
 */
class StringTest
{
    /**
     * @return string written in heredoc syntax
     */
    function hereDocSyntax(){
        $variable=10;
        $string=<<<EOD
            Hello, the universe is dying.
            We need to save it by substituting a $variable.
            But can I do \n in this and "Osama" is just 'simple'.
EOD;
        return $string;
    }

    /**
     * @return string written in nowdoc syntax
     */
    function nowDocSyntax(){
        $string = <<<'EOD'
            This string in written on nowdoc syntax.
            Variables wil not expand in this syntax.
            Quotes "will" work the 'same' way.
            Special characters \n will also not work.
            This type of string is commonly used to write blocks 
            of code in page.
EOD;
        return $string;
    }

    /**
     * @return string explaining the conversion of strings to integers.
     */
    function stringConversion(){
        $string1="10goals";
        $string2="goals";
        $string3="goals10";
        $int1=(int) $string1;
        $int2=(int)$string2;
        $int3=(int)$string3;

        $string=<<<EOD
            Strings can be casted to integers.\n
            '(int) $string1 ' will evaluate to $int1.\n
            '(int) $string2 ' will evaluate to $int2.\n
            '(int) $string3 ' will evaluate to $int3.\n
             A string value will always evaluate to 0 unless it starts with a numeric value (such as “10 years”).
EOD;
        return $string;
    }

}