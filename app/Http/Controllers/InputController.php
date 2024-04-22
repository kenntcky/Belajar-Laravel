<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{

    public function hello(Request $request): string
    {
//        $name = $request->query('name');
        $name = $request->input('name');
        return "Hello there, " . $name . PHP_EOL;
    }

    public function helloNested(Request $request): string
    {
        $name = $request->input('author.name');
        return "Hello there, author " . $name . PHP_EOL;
    }

    public function helloAll(Request $request): string
    {
        $inputs = $request->input();
        return json_encode($inputs);
    }

    public function arrayInput(Request $request)
    {
        $inputs = $request->input('manufacturers.*.name');
        return json_encode($inputs);
    }

}
