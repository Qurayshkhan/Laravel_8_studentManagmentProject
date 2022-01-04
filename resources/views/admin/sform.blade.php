@extends('admin.adminMaster')
@section('content')
    <div class="container-fluid sform">
       
        <div class="row">
            <div class="container col-sm-4">
                @if(session()->has('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
            @endif
                <h1 class="text-center">Student Registration Form</h1>
                <hr>
                <form action="studentForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                 <span>Student Name</span>
                 <input type="text" class="form-control" name="sname" id="" placeholder="Enter Student Name">
                      </div>
                    <div class="mb-3">
                 <span>Father Name</span>
                 <input type="text" class="form-control" name="fname" id="" placeholder="Enter Father Name">
                      </div>
                    <div class="mb-3">
                 <span>Class</span>
                 <input type="text" name="class" class="form-control"  id="" placeholder="Enter Class">
                      </div>
                    <div class="mb-3">
                 <span>Roll</span>
                 <input type="text" name="roll" class="form-control" id="" placeholder="Enter Class">
                      </div>
                    <div class="mb-3">
                 <span>Phone</span>
                 <input type="tel" name="phone" class="form-control" id="" placeholder="Enter phone">
                      </div>
                    <div class="mb-3">
                 <span>Email</span>
                 <input type="email" name="email" class="form-control" id="" placeholder="Enter Email">
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" id="" name="image">
                      </div>
                    <div class="mb-3">
                      <select class="form-select" aria-label="Default select example" name="branch_id">
                        @foreach ($branches as $item)
                        <option selected>Select Branches</option>
                        <option value="{{$item->id}}">{{$item->bfull}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="course_id">
                      @foreach ($courses as $item)
                      <option selected>Select Course</option>
                      <option value="{{$item->id}}">{{$item->cname}}</option>
                      @endforeach
                    
                    </select>

                    </div>
                      
                      <button type="submit" class="btn btn-success btn-lg">Add Student</button>
                </form>
            </div>



<div class="container col-sm-7">
  

 <h1 class="text-center">Student List</h1> 


 <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">SName</th>
        <th scope="col">F.Name</th>
        <th scope="col">Roll</th>
        <th scope="col">Class</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Image</th>
       
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $item)
            
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->sname}}</td>
          <td>{{$item->fname}}</td>
          <td>{{$item->roll}}</td>
          <td>{{$item->class}}</td>
          <td>{{$item->phone}}</td>
          <td>{{$item->email}}</td>
          <td><img src="{{asset('img/'.$item->image)}}" height="100px" width="100px" alt=""> </td>
          <td>

   <a href="{{url('/delete',$item->id)}}"><i class="fas fa-trash text-danger"></i></a>
   <a href="{{url('/edit',$item->id)}}"><i class="fas fa-edit text-warning"></i></a>

          </td>
        </tr>
        @endforeach
   
    </tbody>
  </table>
{{$students->links()}}

</div>


        </div>
       
    </div>
    
@endsection