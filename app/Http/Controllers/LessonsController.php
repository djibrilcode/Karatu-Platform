<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonsController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = Lesson::whereHas('course', function($query) {
            $query->where('user_id', Auth::id());
        })->get();
        return view('lesson.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lesson.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Lesson::create($request->all());
        return redirect()->route('lesson.index')->with('success', 'Lesson créee avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        return view('lesson.show', compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson)
    {
        return view('lesson.edit', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        $lesson->update($request->all());
        return redirect()->route('lesson.index')->with('success','lesson modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('lesson.index')->with('success', 'lesson supprimer avec succès');
    }
}
