<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $prices = Price::latest()
            ->paginate(50);

        return view('test.index', [
            'prices' => $prices
        ]);
    }
}
