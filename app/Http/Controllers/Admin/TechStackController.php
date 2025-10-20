<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TechStack;
use Illuminate\Http\Request;

class TechStackController extends Controller
{
    public function multipleDestroy(Request $request) {
        $ids = $request->input('deleted_ids', []);
        
        try {
            $techStacks = TechStack::findOrFail($ids);
            foreach ($techStacks as $techStack) {
                $imagePath = public_path('images/tech_icons/' . $techStack->path);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $techStack->delete();
            }
            return back()
                ->with('messageDeleteTech', 'Sikeres törlés!');
        } catch (\Exception $e) {
            return  back()->withErrors([
                'messageDeleteTech' => 'Hiba történt törlés közben: ' . $e->getMessage(),
            ])->withInput();
        }
    }

    public function store(Request $request) {
        $request->validate([
            'path' => 'required|mimes:svg|max:1048',
            'tech_name' => 'required|string',
            'description' => 'required|string',
        ]);

        $file = $request->file('path');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('images/tech_icons'), $fileName);

        try {
            $tech = new TechStack();
            $tech->tech_name = $request["tech_name"];
            $tech->description = $request["description"];
            $tech->path = $fileName;
            $tech->save();
            return back()
                ->with('messageStoreTech', 'Sikeres feltöltés!');
        } catch (\Exception $e) {
            return  back()->withErrors([
                'messageStoreTech' => 'Hiba történt törlés közben: ' . $e->getMessage(),
            ])->withInput();
        }
    }
}
