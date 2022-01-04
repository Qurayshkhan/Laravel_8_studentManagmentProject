<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       return view('admin.course');
      
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $course=new courses;
        $course->cname=$request->cname;
        $course->branch_id=$request->branch_id;
        $course->save();
        return view('admin.course');
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
        $course=Branch::find($id)->Course;
        return view('admin.course',['courses'=>$course]);
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
        courses::destroy($id);
        return redirect(route('courseList'))->with('status','Student Data delete Successfully');

    }
    public function dropdown(){
        $branches=Branch::all();
        return view('admin.course',['branches'=>$branches]);
    }
    public function courseList(){
       $course=DB::table('branches')->join('courses','branches.id','=','courses.branch_id')->get();
       return view('admin.courseList',['courses'=>$course]);
    }
}
