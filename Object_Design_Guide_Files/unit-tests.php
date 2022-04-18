<?php

/* The basic structure of each test method is Arrange-Act-Assert:
1 Arrange—Bring the object that we’re testing (also known as the SUT, or Subject
Under Test) into a certain known state.
2 Act—Call one of its methods.
3 Assert—Make some assertions about the end state. */

final class Foo
{
    private int someNumber;

    public function __construct(int startWith)
    {
        $this->someNumber = startWith;
    }

    public function increment(): void
    {
        $this->someNumber++;
    }

    public function someNumber(): int
    {
        return $this->someNumber;
    }


}

/* TestClass Example for Class above */

final class FooTest extends test
{

/** 
 * @test 
 * */

public function you_can_start_with_a_given_number(): void
{
    // Arrange
    foo = new Foo(10);

    // Act
    /* No actual action is performed
    here. We just verify the
    expected state of the object */

    // Assert
    assertEquals(10, foo.someNumber());
}

/**
* @test
*/

public function you_can_increment_the_number(): void
{
    // Arrange
    foo = new Foo(10);

    // Act
    foo.increment();

    // Assert
    assertEquals(11, foo.someNumber());
}

}




