<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paiements = Paiement::all();
        return view('paiement.index', compact('paiements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paiement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Paiement::create($request->all());
        return redirect()->route('course.show')->with('success', 'votre paiment à été effectuée');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paiement $paiement)
    {
        return view('paiemnt.show', compact('paiement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paiement $paiement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paiement $paiement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paiement $paiement)
    {
        $paiement->delete();
        return redirect()->route('paiement.indexi')->with('success', 'le paiement de '.$paiement->user->name.' a été supprimé');
    }
}
