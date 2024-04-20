<?php

namespace Tests\Feature;

use App\Data\Bar;
use App\Data\Foo;
use App\Services\HelloService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FooBarServiceProviderTest extends TestCase
{
    public function testServiceProvider()
    {
        $foo1 = $this->app->make(Foo::class);
        $foo2 = $this->app->make(Foo::class);

        self::assertSame($foo1, $foo2);
        self::assertEquals('Foo', $foo1->foo());

        $bar1 = $this->app->make(Bar::class);
        $bar2 = $this->app->make(Bar::class);

        self::assertEquals('Foo and Bar', $bar1->bar());
        self::assertSame($bar1, $bar2);
    }

    public function testProperty()
    {
        $helloService = $this->app->make(HelloService::class);

        self::assertEquals('Halo Ken' . PHP_EOL, $helloService->hello("Ken"));
    }


}
