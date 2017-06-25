<?php

class ExampleClass
{
    private $blah;
    
    public function __construct() 
    {
        $this->blah = "hello";
    }

    public function output($data)
    {
        return $data;
    }
}