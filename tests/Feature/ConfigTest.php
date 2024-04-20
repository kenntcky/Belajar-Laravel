<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigTest extends TestCase
{
    public function testConfig()
    {
        $name = config("identity.author.name");
        $age = config("identity.author.age");
        $email = config("identity.email");

        self::assertEquals("kenntcky", $name);
        self::assertEquals(16, $age);
        self::assertEquals("example@gmail.com", $email);
    }

}
