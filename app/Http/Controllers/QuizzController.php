<?php

namespace App\Http\Controllers;

use App\Models\Quizz;
use Illuminate\Http\Request;

class QuizzController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzs = Quizz::all();
        return view('quizz.index', compact('quizzs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quizz.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Quizz::create($request->all());
        return redirect()->route('quizz.index')->with('success', 'quizz ajoutée');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quizz $quizz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quizz $quizz)
    {
        return view('quizz.edit', compact('quizz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quizz $quizz)
    {
        $quizz->update($request->all());
        return redirect()->route('quizz.index')->with('success', 'quizz modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quizz $quizz)
    {
        $quizz->delete();
        return redirect()->route('quizz.index')->with('success', 'quizz supprimé');
    }
}
