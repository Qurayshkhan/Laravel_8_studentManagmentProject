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
                <h1 class="text-center">Branches</h1>
                <hr>
                <form action="{{url('branches')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                 <span>Branch sort Name</span>
                 <input type="text" class="form-control" name="bsort" id="" placeholder="Enter Student Name">
                      </div>
                    <div class="mb-3">
                 <span>Branch Full Name</span>
                 <input type="text" class="form-control" name="bfull" id="" placeholder="Enter Father Name">
                      </div>
                 
                      <button type="submit" class="btn btn-success btn-lg">Add Branch</button>
                </form>
            </div>



<div class="container col-sm-7">
  

 <h1 class="text-center">Branch List</h1> 


 <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Branch Sort Name</th>
        <th scope="col">Branch Full Name</th>
        <th scope="col">Action</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach ($branch as $item)
            
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->bsort}}</td>
          <td>{{$item->bfull}}</td>
      
          <td>

   <a href="{{url('/deletebranch',$item->id)}}"><i class="fas fa-trash text-danger"></i></a>
   <a href="{{url('/editbranches',$item->id)}}"><i class="fas fa-edit text-warning"></i></a>

          </td>
        </tr>
        @endforeach
   
    </tbody>
  </table>
  {{$branch->links()}}
</div>
        </div>
       
    </div>
    
@endsection