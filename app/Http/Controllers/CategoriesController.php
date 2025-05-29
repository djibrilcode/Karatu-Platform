<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use App\Models\Categories;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view('categorie.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategorieRequest $request)
    {
        $nom = $request->input('nom');
        $slug = Str::slug($nom);

        Categories::create([
            'name' => $request->name,
            'slug' => $request->$slug,
        ]);


        return redirect()->route('categorie.index')->with('success', 'une nouvelle categorie vient d\'être ajoutée');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        return view('categorie.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategorieRequest $request, Categories $categories)
    {
        $categories->update($request->all());
        return redirect()->route('categorie.index')->with('success', 'la categorie modifée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        $categories->delete();
        return redirect()->route('categorie.index')->with('success', 'la categorie '.$categories->name.' a été supprimée');
    }
}
