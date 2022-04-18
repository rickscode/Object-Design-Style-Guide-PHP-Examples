<?php

    class Foo
    {
        protected $value // Same as private but derived classes can also access.

        private int someNumber // Only members of the same class can access the function.

        private const int anotherNumber = 77;

        public const int publicNumber = 777; // This property can be updated 

        public function __construct(Class $value)
        {
            $this->class = $value;

            $this->someNumber = 7;
        }

        $this->class->method($data);

    }