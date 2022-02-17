<?php
    
    class Foo 
    { 
        public function foo(): void 
        { 
        
        } 
        
        protected function bar(): void 
        { 

        } 

        private function baz(): void 
        { 

        } 
    }

    class Bar extends Foo
    {
        public function fooMethods(): void
        {
            $this->foo(); // available and can be overwritten as public

            $this->bar(); // available can be overwritten as protected

            $this->baz(); // not avaiable as private
        }
    }

    // Classes that extend from another class have access to public and protected methods of the parent class.

