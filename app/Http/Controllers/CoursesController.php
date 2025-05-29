<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $courses = Course::where('user_id', Auth::id())->get();
       return view('course.index', compact('courses'));
    }

    public function list_cour()
    {
       $courses = Course::paginate(10);
       return view('course.list-cour-admin', compact('courses'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'price' => 'required|integer',
        //     'level' => 'required',
        //     'duration' => 'required|integer',
        //     'user_id' => 'required|exists:users,id',
        //     'categorie_id' => 'required|exists:categories,id'
        // ]);

        // Gestion de l'image
        $imageName = null;
        if ($request->hasFile('image_url')) {
            $imageName = time() . '.' . $request->image_url->extension();
            $request->image_url->move(public_path('images'), $imageName);
        }


        // Création du cours
        $course = new Course();
        $course->title = $request->title;
        $course->slug = $request->slug;
        $course->description = $request->description;
        $course->image_url = $imageName;
        $course->price = $request->price;
        $course->level = $request->level;
        $course->duration = $request->duration;
        $course->user_id = $request->user_id;
        $course->sous_categorie_id = $request->sous_categorie_id;
        $course->save();

        // Redirection avec message de succès
        return redirect()->route('course.index')->with('success', 'Le cours a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {

        return view('course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $course->update($request->all());
        return redirect()->route('course.index')->with('success', 'le cours'.$course->title . 'a été modifiè ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index')->with('succes', 'le cours à été supprimé');
    }
}
