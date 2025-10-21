<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Introduction;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function update(Request $request, $id) {
        $validated = $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'content' => 'required|string',
        ]);

        try {
            //megkeresem a frissíteni kívánt element a frontendtől kapott ID alapján
            //átadom neki a validált adatokat és az update() metódussal végül frissítem
            $post = Introduction::findOrFail($id);
            $post->update($validated);
            return back()->with('introductionMessage', 'Sikeres módosítás!');
        } catch (\Exception $e) {
            return back()->withErrors([
                'introductionMessage' => 'Hiba a módosításban: ' . $e->getMessage(),
            ])->withInput();
        }
    }
}
