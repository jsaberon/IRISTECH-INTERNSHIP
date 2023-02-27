<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Pagination;

class StudentController extends Controller
{
    Public function index()
    {
        $data =  Students::orderBy('created_at', 'desc')->paginate(10);


        return view(view: 'students.index', data: ['students'=> $data]);
    }
    public function show($id){
        $data = Students::findOrFail($id);
        
        return view('students.edit', ['students' => $data]);
    }
    public function create(){
        return view('students.create')->with('title','Add New');
    }

    public function store(Request $request){
        $validated =$request->validate([
            "first_name"=>['required','min:4'],
            "last_name"=>['required','min:4'],
            "gender"=>['required'],
            "age"=>['required'],
            'email'=> ['required','email',Rule::unique
            ('students','email')],

           ]);
           
        Students::create($validated);

        return redirect('/')->with('message','New Student was added successfully');
    }
    public function 
    update (Request $request, Students $student){

        $validated =$request->validate([
            "first_name" => ['required','min:4'],
            "last_name" => ['required','min:4'],
            "gender" => ['required'],
            "age" => ['required'],
            "email" => ['required','email'],
           ]);

           $student -> update($validated);

           return back()->with('message','Data was successfully updated!');
    }
    public function destroy(Request $request, Students $student){

        $student -> delete();

        return redirect('/')->with('message','Data was successfully deleted');
    }
}
