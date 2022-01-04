@extends('admin.adminMaster')
@section('content')
    
<div class="container">
    <h1>Course List</h1><hr>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Course Name</th>
            <th scope="col">Branch Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($courses as $item)
                
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->cname}}</td>
              <td>{{$item->bfull}}</td>
              <td>
                  <a href="{{url('coursedelete',$item->id)}}">Delete</a>
              </td>
  
            </tr>
            @endforeach
          
           
        </tbody>
      </table>
</div>


@endsection