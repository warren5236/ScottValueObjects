<?php
namespace ScottValueObjects;

class FirstName
{
    protected string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function length(): int
    {
        return strlen($this->value);
    }
}