<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index(){

        $students=Student::orderBy('id', 'Desc')->paginate(5);
        $url = route('index');

        return view('index',['students'=>$students]);

    } 
    public function create(){

        return view('create');
    }
    public function store(Request $request){
        $request->validate([
            'firstname'=> 'required',
            'lastname'=> 'required',
            'email'=> 'required|unique:students',
            'address'=>'required',
            'image'=>'required|image|mimes:jpeg,png,gif,svg|max:2048'
        ]);
        $input=$request->all();
        if ($image=$request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') .".". $image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            $input['image']="$profileImage";
        }
        Student::create($input);
        $url = route('store');
        return redirect('/')
                        ->with('Student Created Successfully');
    }

    // public function show(Student $student)
    // {
    //     return view('show', compact('student'));
    // }
    
    public function show($id){
        $student = Student::find($id);

        return view('show',['student'=>$student]);
    }
    public function edit($id){
        $student = Student::find($id);

        return view('edit',['student'=>$student]);
    }

    public function update(Request $request, $id ){
        $student = Student::find($id);
        $student->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'address'=> $request->address,
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $student->update($input);
        return redirect()->route('index')
                        ->with('success','Student updated successfully');
    }
    public function delete($id){
        $student = Student::destroy($id);

        return back();

    }
    

}
