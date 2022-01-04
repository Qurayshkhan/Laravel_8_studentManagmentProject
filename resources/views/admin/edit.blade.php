@extends('admin.adminMaster')
@section('content')
<div class="container">
    @if(session()->has('status'))
    <div class="alert alert-success">
        {{ session()->get('status') }}
    </div>
@endif
    <h1 class="text-center">Edit Student Registration Form</h1>
    <hr>
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
     <span>Student Name</span>
     <input type="text" class="form-control" name="sname" id="" placeholder="Enter Student Name" value="{{$students->sname}}">
          </div>
        <div class="mb-3">
     <span>Father Name</span>
     <input type="text" class="form-control" name="fname" id="" placeholder="Enter Father Name" value="{{$students->fname}}">
          </div>
        <div class="mb-3">
     <span>Class</span>
     <input type="text" name="class" class="form-control"  id="" placeholder="Enter Class" value="{{$students->class}}">
          </div>
        <div class="mb-3">
     <span>Roll</span>
     <input type="text" name="roll" class="form-control" id="" placeholder="Enter roll" value="{{$students->roll}}">
          </div>
        <div class="mb-3">
     <span>Phone</span>
     <input type="tel" name="phone" class="form-control" id="" placeholder="Enter phone" value="{{$students->phone}}">
          </div>
        <div class="mb-3">
     <span>Email</span>
     <input type="email" name="email" class="form-control" id="" placeholder="Enter Email" value="{{$students->email}}">
          </div>
          <button type="submit" class="btn btn-success btn-lg">Update Student</button>
    </form>
</div>
@endsection