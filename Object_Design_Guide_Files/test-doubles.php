<?php

/* If the object you’re testing has a dependency, you may not want to use the real dependency
when testing. */

interface Mailer 1((CO28-1))
{

public function sendWelcomeEmail(UserId userId): void;

}

final class ActualMailer implements Mailer
{

// Actual Class
public function sendWelcomeEmail(UserId userId): void
{
    // Send an actual email
}

}

// Class double
final class StandInMailer implements Mailer
{


public function sendWelcomeEmail(UserId userId): void
{
    // Do nothing
}

}


class Foo
{
private Mailer mailer;

public function __construct(Mailer mailer)
{
    this.mailer = mailer;
}

}

// In a test:
/*In a test, we can instantiate
Foo, providing the stand-in
as a constructor argument.*/
foo = new Foo(new StandInMailer());