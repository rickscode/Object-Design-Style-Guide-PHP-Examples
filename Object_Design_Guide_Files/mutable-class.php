<?php

class Mutable
{
    public function __construct(int initialNumber)
    {
        this.someNumber = initialNumber;
    }

    public function increase(): void
    {
        this.someNumber = this.someNumber + 1;
    }
}