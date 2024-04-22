<?php

namespace App\Http\Controllers;

use App\Services\HelloService;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    private HelloService $helloService;

    /**
     * @param HelloService $helloService
     */
    public function __construct(HelloService $helloService)
    {
        $this->helloService = $helloService;
    }

    public function hello($name): string
    {
        return $this->helloService->hello($name);
    }

    public function request(Request $request): string
    {
        return $request->path() . PHP_EOL . '<br>' .
            $request->url() . PHP_EOL . '<br>' .
            $request->fullUrl() . PHP_EOL . '<br>' .
            $request->method() . PHP_EOL . '<br>' .
            $request->header('Accept');
    }

}
