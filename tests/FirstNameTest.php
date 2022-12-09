<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use ScottValueObjects\FirstName;

class FirstNameTest extends TestCase
{
    public function testCanInitialize(): void
    {
        $this->assertNotNull(new FirstName("Name"));
    }
}