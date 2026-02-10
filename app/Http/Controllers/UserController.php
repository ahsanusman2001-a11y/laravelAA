<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //


    public function index()
    {
        $courses = Course::get();
        return view('User.index', compact('courses'));
    }

    public function show()
    {
        $user = Auth::user();

    $registeredCourses = $user->courses; // already registered courses
    $allCourses = Course::all();         // all courses available
    $courses = Auth::user()->courses;

    return view('User.edit', compact('registeredCourses', 'allCourses','courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_ids' => 'required|array',
            'course_ids.*' => 'exists:courses,id',
        ]);

        $user = Auth::user();

        // Store courses in pivot table
        $user->courses()->attach($request->course_ids);

        return redirect()->route('dashboard');
    }

    public function updateCourses(Request $request)
    {
        $request->validate([
            'course_ids' => 'required|array',
            'course_ids.*' => 'exists:courses,id',
        ]);

        $user = Auth::user();

        // Update pivot table: remove unchecked courses, add new ones
        $user->courses()->sync($request->course_ids);

        return back()->with('success', 'Courses updated successfully.');
    }
}
