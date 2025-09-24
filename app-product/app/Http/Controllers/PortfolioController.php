<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = [
            'name' => 'Brew Haven',
            'title' => 'Freshly Brewed Happiness',
            'email' => 'brew.haven@example.com',
            'phone' => '+639298932030',
            'location' => 'Manila, Philippines',
            'bio' => 'At Brew Haven, we serve freshly brewed coffee and pastries made with love. Our goal is to bring comfort and energy with every cup!',
            'profile_image' => 'https://img.freepik.com/premium-photo/light-coffee-background_670147-41733.jpg',

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
