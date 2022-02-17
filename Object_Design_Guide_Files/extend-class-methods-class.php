<?php

    class Foo
    {
        public function bar() : void
        {
            // do something
        }
    }

    class Bar extends Foo
    {
        public function bar() : void
        {
            // do something totally different
        }
    }


//     Finally, a class could provide a full implementation for all its methods but allow other classes to extend and override some of its methods.

// (Page 11). 