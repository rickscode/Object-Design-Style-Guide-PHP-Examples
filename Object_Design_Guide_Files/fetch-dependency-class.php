<?php

    class Foo
    {
        public function someMethod() : void
        {
            logger = Service.Locator.getLogger(); // Fetch logger instance from known location
        }
    }