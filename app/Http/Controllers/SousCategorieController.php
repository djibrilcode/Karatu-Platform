<?php

namespace App\Http\Controllers;

use App\Models\Sous_categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SousCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sous_categories = Sous_categorie::all();
        return view('sous_categorie.index', compact('sous_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sous_categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        Sous_categorie::create($request->all());

        return redirect()->route('sous-categorie.index')->with('success', 'une nouvelle categorie vient d\'être ajoutée');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $sousCategories  = Sous_categorie::where('slug', $slug)->firstOrFail();
        return view('sous_categorie.show', compact('sousCategories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $sous_categorie = Sous_categorie::where('slug', $slug)->firstOrFail();
        return view('sous_categorie.edit', compact('sous_categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $sous_categorie = Sous_categorie::where('slug', $slug)->firstOrFail();
        $sous_categorie->update($request->all());
        return redirect()->route('sous-categorie.index')->with('success', 'La sous-catégorie a été modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sous_categorie $sous_categorie)
    {
        $sous_categorie->delete();
        return redirect()->route('sous_categorie.index')->with('success', 'la sous catégorie à été modifié avec succès');
    }
}
