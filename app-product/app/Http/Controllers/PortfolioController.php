<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = [
            'name' => 'jiem coffee',
            'title' => 'coffee',
            'email' => 'jugan.johnmark.bandico@gmail.com',
            'phone' => '09301691327',
            'location' => 'Manila, balingasa',
            'bio' => 'At Brew Haven, we serve freshly brewed coffee and pastries made with love. Our goal is to bring comfort and energy with every cup!',
            'profile_image' => 'https://wallpapers.com/images/hd/coffee-cup-dark-aesthetic-l5c8uth00nnwfu0n.jpg',

            // Removed projects
            'skills' => ['Cappuccino', 'Latte', 'Espresso', 'Cold Brew'],

            'testimonials' => [
                ['quote' => 'Best coffee in town! Love the atmosphere.', 'author' => 'Maria G.'],
                ['quote' => 'The cappuccino is always perfect, highly recommend!', 'author' => 'James L.'],
            ],
        ];

        return view('portfolio.index', compact('portfolio'));
    }
}
