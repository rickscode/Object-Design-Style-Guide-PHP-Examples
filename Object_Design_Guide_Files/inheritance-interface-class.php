<?php

    interace Foo
    {
        public function foo() : void;
        // Declare methods but not provide implementation
    }

    class Bar implements Foo
    {
        public foo() : void
        {

        }
    }


// You can have a class with no properties and no methods, but only method signatures. Such a class is usually called an interface, and many object-oriented languages allow you to define it as such. A class can then implement the interface and provide the actual implementations of the methods that were defined in the interface.

// (Page 10). 
