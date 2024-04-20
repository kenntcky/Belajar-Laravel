<?php

namespace App\Services;

class HelloServiceIndonesia implements HelloService
{


    public function __construct(private string $name)
    {
    }

    public function Hello(string $name): string
    {
        return "Halo " . $name . ", nama saya " . $this->name . PHP_EOL;
    }
}
