<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InputTest extends TestCase
{
    public function testInput()
    {
        $this->get('/input?name=kenntcky')
            ->assertSeeText('Hello there, kenntcky');

        $this->post('/input', ['name' => 'kenntcky'])
            ->assertSeeText('Hello there, kenntcky');
    }

    public function testNestedInput()
    {
        $this->post('/input/nested', ['author' => ['name' => 'kenntcky']])
            ->assertSeeText('Hello there, author kenntcky');
    }

    public function testAllInput()
    {
        $this->post('/input/all', ['author' => ['name' => 'kenntcky',
            'email' => 'kenntcky@gmail.com']
        ])->assertSeeText('kenntcky@gmail.com');

    }

    public function testArrayInput()
    {
        $this->post('/input/array', ['manufacturers' => [
            ['name' => 'Porsche'],
            ['name' => 'BMW'],
            ['name' => 'Toyota'],
            ['name' => 'Honda'],
            ['name' => 'Ford'],
            ['name' => 'Volvo'],
            ['name' => 'Audi']
        ]])->assertSeeText('BMW')
            ->assertSeeText('Porsche');
    }

}
