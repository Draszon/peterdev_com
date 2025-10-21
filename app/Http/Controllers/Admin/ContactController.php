<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function multipleDestroy (Request $request) {
        $ids = $request->input('deleted_ids', []);

        try {
            //a frontendről kapott adatok alapján kikeresem a törlendő elemeket
            //az adatbázisból, majd egy ciklus segítségével egyesével törlöm őket            
            $contacts = Contact::findOrFail($ids);
            foreach ($contacts as $contact) {
                $imagePath = public_path('images/contact_icons/' . $contact->index_path);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $contact->delete();
            }
            return back()
                ->with('messageDeleteContact', 'Sikeres törlés!');
        } catch (\Exception $e) {
            return back()->withErrors( [
                    'messageDeleteContact' => 'Hiba a törlés közben: ' . $e->getMessage(),
                ])->withInput();
        }
    }

    public function store (Request $request) {
        $request->validate([
            'contact_name' => 'required|string',
            'contact_link' => 'required|string',
            'url' => 'required|string',
            'index_path' => 'required|mimes:svg|max:1024',
        ]);

        try {
            $file = $request->file('index_path');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('images/contact_icons'), $fileName);

            //nekem puska: ha nem lenne módosítva semmi, mint pl a fájlnév,
            //akkor ennyi elég lenne:
            //Project::create($request->all());
            
            $contact = new Contact();
            $contact->contact_name = $request["contact_name"];
            $contact->contact_link = $request["contact_link"];
            $contact->url = $request["url"];
            $contact->index_path = $fileName;
            $contact->save();
            return back()->with('messageStoreContact', 'Sikeres feltöltés!');
        } catch (\Exception $e) {
            return back()->withErrors( [
                    'messageStoreContact' => 'Hiba a feltöltés közben: ' . $e->getMessage(),
                ])->withInput();
        }
    }
}
