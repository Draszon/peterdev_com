<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\Introduction;
use App\Models\TechStack;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $introductions = Introduction::all();
        $aboutmes = AboutSection::all();
        $techStacks = TechStack::all();

        return view('public.home', compact(
            'introductions', 
            'aboutmes',
            'techStacks',
        ));
    }
}
