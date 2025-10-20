<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    public function update(Request $request, $id) {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        try {
            $post = AboutSection::findOrFail($id);
            $post->update($validated);
            return back()->with('aboutmeMessage', 'Sikeres módosítás!');
        } catch (\Exception $e) {
            return back()->withErrors([
                'aboutmeMessage' => 'Hiba az adatok módosításában: ' . $e->getMessage(),
            ])->withInput();
        }
    }
}
