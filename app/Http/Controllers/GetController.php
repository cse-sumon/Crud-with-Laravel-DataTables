<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Middleware\CORS;
use DB;

class GetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');

    }


    public function getData(){
        // $student=Student::all();
        // $json=json_encode( array('student' =>$student, ));
        // return view('get');
        $student= Student::all();
       // return json_encode($student);
         return json_encode( array('student'=>$student));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student=Student::create($request->all());
         return json_encode( array('student'=>$student));
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $student=Student::find($id);
        if($student){
        return json_encode( array('student'=>$student));
        }
        else{
            return "Data not found";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=student::find($id);
        return json_encode(array("student"=>$student));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $student=Student::find($id);
         $student->update($request->all());
         return json_encode( array('student'=>$student));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();

    }



 


    public function getBasicObjectData()
    {
        $student = Student::select(['id', 'name', 'dept', 'created_at', 'updated_at']);

        return Datatables::of($student)->make();
    }


    
}
