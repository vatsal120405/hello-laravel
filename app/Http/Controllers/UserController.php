<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@example.com'
            ],
            [
                'id' => 2,
                'name' => 'Jane Doe',
                'email' => 'jane@example.com'
            ],
            [
                'id' => 3,
                'name' => 'John Doe',
                'email' => 'john@example.com'
            ]
        ];
        return view('users', compact('users'));
    }
    public function helper()
    {
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description 1',
                'price' => 100
            ]
        ];
        return view('helper', compact('products'));
    }

    public function filesize()
    {
        $bytes = 33333333333333333333333;
        return filesize_helper($bytes);
    }
}
