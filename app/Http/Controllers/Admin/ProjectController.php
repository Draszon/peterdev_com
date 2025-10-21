<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function multipleDestroy(Request $request) {
        $ids = $request->input('deleted_ids', []);

        try {
            //a frontendről kapott adatok alapján kikeresem a törlendő elemeket
            //az adatbázisból, majd egy ciklus segítségével egyesével törlöm őket            
            $projects = Project::findOrFail($ids);
            foreach ($projects as $project) {
                $basePath = rtrim(env('PUBLIC_PATH', public_path('images')), '/');
                $imagePath = $basePath . '/projekt_indexek/' . $project->index_path;

                //$imagePath = public_path('images/projekt_indexek/' . $project->index_path);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $project->delete();
            }
            return back()
                ->with('messageDeleteProject', 'Sikeres törlés!');
        } catch (\Exception $e) {
            return back()->withErrors( [
                    'messageDeleteProject' => 'Hiba a törlés közben: ' . $e->getMessage(),
                ])->withInput();
        }
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'technology' => 'required|string',
            'link' => 'required|string',
        ]);

        try {
            $project = Project::findOrFail($id);
            $project->update($validated);
            return back()->with('messageUpdateProject', 'Sikeres frissítés!');
        } catch (\Exception $e) {
            return back()->withErrors( [
                    'messageUpdateProject' => 'Hiba a módosítás közben: ' . $e->getMessage(),
                ])->withInput();
        }
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'technology' => 'required|string',
            'link'=> 'required|string',
            'index_path' => 'required|image|max:1024',
        ]);

        try {
            $file = $request->file('index_path');
            $fileName = $file->getClientOriginalName();

            $destinationPath = rtrim(env('PUBLIC_PATH', public_path('images')), '/') . '/projekt_indexek';
            $file->move($destinationPath, $fileName);

            //$file->move(public_path('images/projekt_indexek'), $fileName);

            //nekem puska: ha nem lenne módosítva semmi, mint pl a fájlnév,
            //akkor ennyi elég lenne:
            //Project::create($request->all());
            
            $project = new Project();
            $project->title = $request["title"];
            $project->description = $request["description"];
            $project->technology = $request["technology"];
            $project->link = $request["link"];
            $project->index_path = $fileName;
            $project->save();
            return back()->with('messageStoreProject', 'Sikeres feltöltés!');
        } catch (\Exception $e) {
            return back()->withErrors( [
                    'messageStoreProject' => 'Hiba a feltöltés közben: ' . $e->getMessage(),
                ])->withInput();
        }
    }
}
