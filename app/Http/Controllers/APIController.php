<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function create()
    {
        $students = new Student();
        $students->name = request()->input('name');
        $students->save();
        return response()->json($students);
    }
    public function show()
    {
        $students = Student::all();
        return response()->json($students);
    }
    public function showById($id)
    {
        $students = Student::find($id);
        return response()->json($students);
    }
    public function update(Request $request, $id)
    {
        $students = Student::find($id);
        $students->name = $request->input('name');
        $students->save();
        return response()->json($students);
    }
    public function delete(Request $request, $id)
    {
        $students = Student::find($id);
        $students->delete();
        return response()->json($students);
    }
}
