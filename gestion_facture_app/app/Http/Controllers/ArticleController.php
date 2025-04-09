<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $articles = Article::all();
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'titre'=>'required|string|min:5',
            'description'=>'required|string',
            'quantite'=>'required|integer',
            'prix'=>'required|integer',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:4096'
        ]);
        $imagePath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('articles','public');
        }
        Article::create([
            'titre'=> $request->titre,
            'description' =>$request->description,
            'quantite' =>$request->quantite,
            'prix'=>$request->prix,
            'image'=>$imagePath,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $article = Article::findOrfail($id);
        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $article = Article::findOrFail($id); // Récupère l'article par son ID
        return view('articles.edit', compact('article')); // Passe l'article à la vue
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $article = Article::findOrFail($id);
    $article->update($request->all());
    return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article supprimé !');

    }
}
