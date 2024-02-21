<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    $gadgets = [

        [
            'iPhone 13',
            'Samsung Galaxy Watch',
            'Sony Noise-Canceling Headphones',
        ],

        [
            'name' => 'TechMaster X10',
            'description' => 'A sleek and powerful smartphone with a quad-camera setup, AMOLED display, and 5G connectivity.',
            'price' => 799,
        ],

        [
            'name' => 'QuantumBook Pro',
            'description' => 'An ultrathin laptop with an Intel Core i7 processor, 16GB RAM, and a stunning 4K display.',
            'price' => 1299,
        ],
        [
            'name' => 'TimeWear S20',
            'description' => 'A fitness-focused smartwatch with heart rate monitoring, GPS tracking, and customizable watch faces.',
            'price' => 199,
        ],

        [
            'name' => 'SoundPods Air',
            'description' => 'True wireless earbuds with noise cancellation, touch controls, and up to 20 hours of battery life.',
            'price' => 129,
        ],

        [
            'name' => 'PowerJuice 10000',
            'description' => 'A compact power bank with fast charging support, suitable for charging smartphones and other devices on the go.',
            'price' => 39,
        ],
        
    ];

    return view('products.gadgets', ['gadgets' => $gadgets]);
}

}
