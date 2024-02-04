<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

class crudController extends Controller
{
    //
    public function main(){
        return view('layout.main');
    }
    public function form(){
        return view('crud.addForm');
    }
    public function list(){
        $student= crud::all();
        return view('crud.listForm', compact('student'));
    }
    public function edit($id){
        $student = crud::find($id);
        $students=crud::all();
        return view('crud.editForm', compact('student','students'));
    }
    public function add(Request $request){
        $student = new crud();
        $student->name = $request->name;
        $student->class = $request->class;
        $student->rollno = $request->rollno;
        $student->save();
        return redirect('list');
    }
    public function update(Request $request, $id){
        $student = crud::find($id);
        $student->name = $request->name;
        $student->class = $request->class;
        $student->rollno = $request->rollno;
        $student->update();
        return redirect('list');

    }
    public function delete($id){
        $student= crud::find($id);
        $student->delete();
        return redirect()->back();

    }
}