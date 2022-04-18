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

// Polymorphism is one of the foundations of object-oriented programming. Polymorphism means that if a parameter has a certain class as its type,
//
// any object that is an instance of that class can be provided as a valid argument.
//
// For example, any instance of Foo can be passed as an argument to the bar() method in the following listing.

// In most situations it’s better to use polymorphism with an
//interface parameter type. This looks the same in code (see the following listing), but
//now Foo is an interface.

// (Page 13).

interface Foo
{
    //..
}

final class Bar
{
    public function bar(Foo foo): void
    {
        foo.someMethod();
    }
}
