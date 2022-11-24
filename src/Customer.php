<?php

namespace Programmer\Belajar{

    class Customer{
        public function __construct($name)
        {
        }
        public function hello($name)
        {
            return "Hello $name, my name is $this->name";
        }
    }


}