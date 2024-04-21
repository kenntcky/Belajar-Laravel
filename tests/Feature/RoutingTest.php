<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    public function testGetRouting()
    {
        $this->get('/login')
            ->assertStatus(200)
        ->assertSeeText('Login page');
    }

    public function testRedirect()
    {
        $this->get('/home')
            ->assertRedirect('/login');
    }

    public function testFallback()
    {
        $this->get('/404')
            ->assertSeeText('404 Not Found');

        $this->get('/awogawog')
            ->assertSeeText('404 Not Found');
    }

    public function testView()
    {
        $this->get('/new')
            ->assertSeeText('kenntcky');
    }

    public function testViewWithoutRoute()
    {
        $this->view('shop.transaction', ['price' => '$9999'])
            ->assertSeeText('Your cart');
    }

}
