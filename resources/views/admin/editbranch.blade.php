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
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                 <span>Branch sort Name</span>
                 <input type="text" class="form-control" name="bsort" id="" placeholder="Enter Student Name" value="{{$branches->bsort}}">
                      </div>
                    <div class="mb-3">
                 <span>Branch Full Name</span>
                 <input type="text" class="form-control" name="bfull" id="" placeholder="Enter Father Name" value="{{$branches->bfull}}">
                      </div>
                 
                      <button type="submit" class="btn btn-success btn-lg">Update Branch</button>
                </form>
            </div>
        </div>
       
    </div>
    
@endsection