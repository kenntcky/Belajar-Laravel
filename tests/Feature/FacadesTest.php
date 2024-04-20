<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;

class FacadesTest extends TestCase
{
    public function testFacades()
    {
        $firstName1 = config("author.name");
        $firstName2 = Config::get("author.name");

        assertEquals($firstName1, $firstName2);

        var_dump(Config::all());
    }

    public function testFacadesDependency()
    {
        $config = $this->app->make('config');
        $firstName3 = $config->get("identity.author.name");

        $firstName1 = config("identity.author.name");
        $firstName2 = Config::get("identity.author.name");

        assertEquals($firstName1, $firstName2);
        assertEquals($firstName1, $firstName3);

        var_dump(Config::all());
    }

    public function testFacadesMock()
    {
        Config::shouldReceive('get')
            ->with('identity.author.name')
            ->andReturn('Kentaki');

        $firstName = Config::get("identity.author.name");

        assertEquals('Kentaki', $firstName);
    }


}
