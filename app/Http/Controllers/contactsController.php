<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

require_once base_path('vendor/laravel/framework/src/Illuminate/Foundation/helpers.php'); 

class contactsController extends Controller
{
    public function create(): view
    {
        return view('contact');
       // dd(\App\Models\Contact::create ($request->all ()));

    }
    public function store(Request $request)
    {
        // Valider les données de la requête
  //$request->validate([
   // 'name' => 'required|string|max:255',
   // 'email' => 'required|email|unique:contacts',
   // 'phone' => 'nullable|string|max:20',
    //'message' => 'nullable|string|max:1000',
 // ]);

  // Créer un nouveau contact avec les données validées
  //$contact = new Contact($request->validated());

  // Enregistrer le contact dans la base de données
  //$contact->save();

  // Rediriger vers la vue 'show' qui affiche le contact créé
  //return redirect()->route('contacts.show', $contact);
   // }
   //a partir de la sessaie une une methode
   $this->validate($request, [
    'email' => 'bail|required|email',
    'message' => 'bail|required|max:500'
    ]);
    $contact = new \App\Models\Contact;
    $contact->email = $request->email;
    $contact->message = $request->message;
    $contact->save();
    return "C'est bien enregistré !";
    //$contact = new \App\Models\Contact;
       // $contact->email = $request->email;
        //$contact->message = $request->message;
        //$contact->save();
}
}
