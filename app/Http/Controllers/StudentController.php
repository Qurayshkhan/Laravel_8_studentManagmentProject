<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\courses;
use Illuminate\Http\Request;
use App\Models\students;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses=courses::all();
        $branches=Branch::all();
        $students=DB::table('students')->simplePaginate(5);
        return view('admin.sform',['students'=>$students,'courses'=>$courses,'branches'=>$branches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $students=new students();
        $students->sname=$request->sname;
        $students->fname=$request->fname;
        $students->class=$request->class;
        $students->roll=$request->roll;
        $students->phone=$request->phone;
        $students->email=$request->email;
        $students->image=$request->file('image')->getClientOriginalName();
        $students->course_id=$request->course_id;
        $students->branch_id=$request->branch_id;
        $students->save();
        $request->image->move(public_path('img'),$students->image);
        return redirect(route('create'))->with('status','Student Add Successfully');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $students=students::find($id);
        return view('admin.edit',['students'=>$students]);
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
        //
        $students=students::find($id);
        $students->sname=$request->sname;
        $students->fname=$request->fname;
        $students->class=$request->class;
        $students->roll=$request->roll;
        $students->phone=$request->phone;
        $students->email=$request->email;
        $students->save();
        return redirect(route('create'))->with('status','Student Information Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        students::destroy($id);
        return redirect()->back()->with('status','Student Data delete Successfully');
    }
   
}
