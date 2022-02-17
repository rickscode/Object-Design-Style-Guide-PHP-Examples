<?php

class Foo
{
    //...
}

final class Bar
{
    public function bar(Foo foo): void
    {
        foo.someMethod();
    }
}

// Polymorphism is one of the foundations of object-oriented programming. Polymorphism means that if a parameter has a certain class as its type, any object that is an instance of that class can be provided as a valid argument. For example, any instance of Foo can be passed as an argument to the bar() method in the following listing.

// (Page 13). 