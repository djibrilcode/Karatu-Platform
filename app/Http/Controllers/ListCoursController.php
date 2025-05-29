<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class ListCoursController extends Controller
{
    public function index()
    {
        $courses = Course::all();
       return view('listCours.index', compact('courses'));
    }
}
