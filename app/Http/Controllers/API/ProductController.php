<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return 'Hello Wahyu To Api';
    }

    public function all(Request $request) {
        return 'Hello Wahyu To Api';
    }
}
