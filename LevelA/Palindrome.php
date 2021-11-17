<?php

namespace Hackathon\LevelA;

class Palindrome
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * This function creates a palindrome with his $str attributes
     * If $str is abc then this function return abccba
     *
     * @TODO
     * @return string
     */
    public function generatePalindrome()
    {
        $str = str_split(utf8_decode($this->str));
        $str = array_reverse($str);
        $str = implode('', $str);
        $str = utf8_decode($this->str) . $str;
        $str = utf8_encode($str);
        return $str;
    }
    

}
