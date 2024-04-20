<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmenTest extends TestCase
{

    public function testEnv()
    {
        $name = env("NAMA", "kenntcky");

        self::assertEquals("kenntcky", $name);
    }
}
