<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MyStudy;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function multipleDestroy(Request $request) {
        $ids = $request->input('deleted_ids', []);

        try {
            $studies = MyStudy::findOrFail($ids);
            foreach ($studies as $study) {
                $study->delete();
            }
            return back()->with('messageDeleteStudy', 'Sikeres tanulmány törlése!');
            
        } catch (\Exception $e) {
            return back()->withErrors( [
                    'messageDeleteStudy' => 'Hiba a törlés közben: ' . $e->getMessage(),
                ])->withInput();
        }
    }

    public function store(Request $request) {
        $request->validate([
            'date' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        try {
            MyStudy::create($request->all());
            return back()->with('messageUploadStudy', 'Sikeres feltöltés!');
        } catch (\Exception $e) {
            return back()->withErrors( [
                    'messageUploadStudy' => 'Hiba a feltöltés közben közben: ' . $e->getMessage(),
                ])->withInput();
        }
    }
}
