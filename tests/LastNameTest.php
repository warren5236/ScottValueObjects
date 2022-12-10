<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use ScottValueObjects\LastName;

class LastNameTest extends TestCase
{
    public function testCanInitialize(): void
    {
        $this->assertNotNull(new LastName("Name"));
    }
}