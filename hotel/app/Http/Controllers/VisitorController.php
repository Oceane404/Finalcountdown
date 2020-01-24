<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function showMyView()
    {
        return view('customer');
    }

    public function showMyRoom()
    {
        return view('room');
    }

    public function showRate()
    {
        return view('rate');
    }

    public function showPresentation()
    {
        return view('presentation');
    }

    public function showRegister()
    {
        return view('visitors.connect');
    }

    public function showAccount()
    {
        return view('visitors.account');

    }

    public function showInfo()
    {
        return view ('visitors.info');
    }

    public function showBooking()
    {
        return view ('visitors.booking');
    }

    public function showGame()
    {
        return view ('visitors.game');
    }

    public function createVisitors()
    {
        return view('visitors.createVisitor');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' =>'required|max:50|string',
            'prenom' => 'required|max:50|string',
            'telephone' => 'required|integer',
            'email' => 'required|max:50|string',
            'adresse' => 'required|max:50|string',
            'cp' => 'required|integer|max:5',
            'password'  => 'required|max:50|string',
        ]);
    
    }

    public function edit($id) {

    
        $visitor = Visitor::find($id);
        
        return view('visitors.editVisitor');
    }

    public function update(Request $request, $id) {

        
        $visitor = Visitor::find($id);
        
        // On associe les valeurs de colonnes de notre visiteur avec les valeurs reçues de notre formulaire :
        $visitor->nom = $request->nom;
        $visitor->prenom = $request->prenom;
        $visitor->telephone = $request->telephone;
        $visitor->email = $request->email;
        $visitor->adresse = $request->adresse;
        $visitor->cp = $request->cp;
        $visitor->password = $request->password;
        
        $visitor->save();
        return redirect('/account');
    }

    
    public function delete($id) {

        $visitor = Visitor::find($id);
        
        // Méthode d'Eloquent permettant de supprimer notre client
        $visitor->delete();

        // Redirection sur la homepage
        return redirect('/');



    }


}


