<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = Client::all();
        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // App\Http\Controllers\ClientController.php

public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'email' => 'required|email|unique:clients,email',
        'telephone' => 'required|numeric',
        'adresse' => 'required|string|max:255',
        'image'=>'nullable|mimes:jpeg,jpg,png,gif|max:4096'
    ]);

    $imagePath = null;
    if($request->hasFile('image')){
        $imagePath = $request->file('image')->store('clients','public');
    }

    Client::create([
        'nom'=>$request->nom,
        'email'=>$request->email,
        'telephone'=>$request->telephone,
        'adresse'=>$request->adresse,
        'image'=>$imagePath

    ]);

    return redirect()->route('clients.index')
        ->with('success', 'Client créé avec succès');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $client = Client::findOrfail($id);
        return view('clients.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $client = Client::findOrfail($id);
        return view('clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $clients = Client::findOrfail($id);
        $clients->update($request->all());
        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $client = Client::findOrfail($id);
        $client->delete();
        return redirect()->route('clients.index');
    }
}
