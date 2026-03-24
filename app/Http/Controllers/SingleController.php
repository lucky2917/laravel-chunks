<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = [
            'title'   => 'Welcome to My App',
            'message' => 'Hello, World!',
            'items'   => ['Apple', 'Banana', 'Cherry'],
        ];

        return $data;
    }
}
