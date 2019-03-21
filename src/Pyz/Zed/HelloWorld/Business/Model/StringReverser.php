<?php
namespace Pyz\Zed\HelloWorld\Business\Model;

class StringReverser
{
    public function reverseString($originalString)
    {
        $reversedString = strrev($originalString);
        return $reversedString;
    }
}
