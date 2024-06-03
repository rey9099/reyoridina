<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tag_name' => 'required|string|max:255',
            'tag_description' => 'required|string|max:255',
        ]);
    
        $event = new Student;
        $event->std_tagname = $validatedData['tag_name'];
        $event->std_tagdescription = $validatedData['tag_description'];
        $event->save();
    
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        if (!$student) {
            return redirect()->route('students.index')->with('error', 'Student not found');
        }
    
        $validatedData = $request->validate([
            'tag_name' => 'required|string|max:255',
            'tag_description' => 'required|string|max:255',
        ]);
    
        $student->std_tagname = $validatedData['tag_name'];
        $student->std_tagdescription = $validatedData['tag_description'];
        $student->save();
    
        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        if (!$student) {
            return redirect()->route('students.index')->with('error', 'Student not found');
        }
    
        $student->delete();
    
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
