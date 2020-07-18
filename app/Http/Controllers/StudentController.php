<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function list(){
        $list = DB::select('SELECT * FROM student');


        return view('students.list', [
            'list' => $list,
        ]);
    }

    public function add()
    {
        return view('students.index', [
            'editData'=> null,
        ]);
    }

    public function addAction(Request $request){
            $name = $request->input('name');
            $cep = $request->input('cep'). ' - '.$request->input('bairro'). ', '.$request->input('logradouro'). ', '.$request->input('cidade'). ' - '.$request->input('estado');
            $curso = $request->input('curso');

            DB::insert('INSERT INTO student (student_name, situation, address, course) values (:name, :situation, :address, :course)', [
                'name'=> $name,
                'situation' => 1,
                'address' => $cep,
                'course' => $curso
            ]);

            return redirect()->route('student.list');
    }

    public function edit($id){
        $student = DB::select('SELECT * FROM student WHERE id = :id', ['id'=>$id]);
        return view('students.index', ['editData'=>$student[0]]);
    }

    public function editAction(Request $request, $id){
        $name = $request->input('name');
        $cep = $request->input('cep'). ' - '.$request->input('bairro'). ', '.$request->input('logradouro'). ', '.$request->input('cidade'). ' - '.$request->input('estado');
        $curso = $request->input('curso');

        DB::update('UPDATE student set student_name = :name, situation=:situation, address=:address, course=:course WHERE id = :id', [
            'name'=> $name,
            'situation' => 1,
            'address' => $cep,
            'course' => $curso,
            'id'=> $id
        ]);
        return redirect()->route('student.list');
    }

    public function delete($id){
        DB::delete('DELETE FROM student WHERE id = :id', ['id'=>$id]);
        return redirect()->route('student.list');
    }

}
