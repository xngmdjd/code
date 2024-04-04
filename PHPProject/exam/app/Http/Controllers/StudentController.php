<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classes::Orderby('id','desc')->paginate(10);
        $students = Student::Orderby('id','desc')->paginate(10);
        return view('student.index', compact('students','classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

//        $student = new Student();
//        $student->RoomNumber = $request->roomNumber;
//        $room->RoomType = $type;
//        $room->Availability = $ava;
//
//        $room->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
