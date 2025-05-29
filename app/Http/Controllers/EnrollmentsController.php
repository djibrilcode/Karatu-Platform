<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Enrollments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EnrollmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = DB::select('
            SELECT enrollments.*, courses.title AS course_title, users.name AS student_name FROM enrollments
            JOIN courses ON enrollments.course_id = courses.id
            JOIN users ON enrollments.user_id = users.id
            WHERE courses.user_id = ? ',[Auth::id()]
        );
        return view('enrollment.index', compact('enrollments'));
    }

    public function list_enrollment_admin(){
        $enrollments = Enrollment::all();
        return view('enrollment.index', compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enrollment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Enrollment $enrollments)
    {
        if ($enrollments->course->is_free === true) {
            Enrollment::create($request->all());
            return redirect()->route('course.show')->with('');
        } else {
            return redirect()->route('payment.create');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enrollments)
    {
        return view('enrollment.show', compact('enrollments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enrollment $enrollments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollments)
    {
        //
    }
}
