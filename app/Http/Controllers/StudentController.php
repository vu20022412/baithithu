<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student(){
        $students = Students::all();
        return view('student_manage', ['students' => $students]
    );
    }

    public function get_student_by_id($id)
    {
        $student = Students::find($id);
        return view('student_edit', ['student' => $student]);
    }

    public function edit(Request $request, $id)
    {
        $student = Students::find($id);
        $student->fullname = $request->fullname;
        $student->birthday = $request->birthday;
        $student->address = $request->address;
        $student->save();

        return redirect('/student');
    }
}
