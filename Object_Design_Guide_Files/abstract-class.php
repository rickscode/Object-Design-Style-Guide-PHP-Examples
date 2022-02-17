<?php

    abstract class Foo
    {
        abstract public funtion foo() : void;

        public function bar() : void
        {

        }
    }

    class Baz extends Foo
    {
        public function foo() : void
        {

        }
    }

//     An interface doesn’t define any implementation, but an abstract class does. It allows you to provide the implementation for some methods and only the signatures for some other methods. An abstract class can’t be instantiated, but first has to be extended by a class that provides implementations for the abstract methods.

// (Page 11). 