<?php

class Immutable
{
    private int someNumber;

    public function __construct(int initialNumber)
    {
        this.someNumber = initialNumber;
    }

    public function increase() : Immutable
    {
        return new Immutable(someNumber + 1);
    }
}