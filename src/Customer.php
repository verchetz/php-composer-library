<?php

namespace Programmer\Belajar{

    class Customer{

        public $name;

        public function __construct($name = 'anon')
        {
            $this->name = $name;
        }
        public function hello($name = "guest")
        {
            return "Hello $name, my name is $this->name";
        }
    }


}