<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\Contact;
use App\Models\Introduction;
use App\Models\MyStudy;
use App\Models\Project;
use App\Models\TechStack;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $introductions = Introduction::all();
        $aboutmes = AboutSection::all();
        $techStacks = TechStack::all();
        $projects = Project::all();
        $studies = MyStudy::all();
        $contacts = Contact::all();

        return view('admin.dashboard', compact(
            'introductions', 
            'aboutmes',
            'techStacks',
            'projects',
            'studies',
            'contacts',
        ));
    }
}
