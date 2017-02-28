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



}