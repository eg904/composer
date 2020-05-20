<?php

namespace App;
class First
{
    protected string $greeting = '%s was %s';
    protected ?string $date = null;

    public function __construct(string $name = null)

    {
        $this->name = $name;
    }

    public function showGreeting(): string

    {
        $this->date ??= date('d-m-Y');

        $dayOfWeek = date("l", strtotime($this->date));
        return \sprintf($this->greeting, $this->date, $dayOfWeek);
    }
}