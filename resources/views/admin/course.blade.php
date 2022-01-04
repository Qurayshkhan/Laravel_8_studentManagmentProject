 @extends('admin.adminMaster')
 @section('content')
 <div class="container-fluid sform">
       
    <div class="row">
       
   <div class="container col-sm-6">

       <h1 class="text-center">Course Registration Form</h1>
       <hr>
       <form action="{{url('courseForm')}}" method="POST">
           @csrf
           @method('PUT')
           <div class="mb-3">
        <span>Course Name</span>
        <input type="text" class="form-control"  name="cname" id="" placeholder="Enter Course Name">
             </div>
           <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="branch_id"> 
                @foreach ($branches as $item)
                <option value="{{$item->id}}">{{$item->bfull}}</option>
                    
                @endforeach
              </select>

             </div>
            
             <button type="submit" class="btn btn-success btn-lg">Add Course</button>
           
       </form>
   </div>



</div>
   </div>
</div>
 @endsection   