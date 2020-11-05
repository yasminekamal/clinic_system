@extends('admin')
@section('content')

<div class=" mt-1 table-responsive-sm table-responsive-md table-responsive-lg container">
  <h2 class="text-dark">Show Department</h2>
  <table class="table text-dark  text-center bg-light table-bordered table-striped table-hover" style="font-size:18px;font-weight:bold">
    <tr >
      <th class="bg-primary text-white w-25">id</th>
      <td >{{$department['id']}}</td>
    </tr>
    <tr>
      <th class="bg-primary  text-white  w-25">Department Name</th>
      <td >{{$department['name']}}</td>
    </tr>
 
    <tr>
      <th class="bg-primary   text-white   w-25">created At</th>
      <td >{{$department['created_at']}}</td>
    </tr>
    <tr>
      <th class="bg-primary   text-white   w-25">updated At</th>
      <td >{{$department['updated_at']}}</td>
    </tr>
    <tr>
     </table>
     <a class="btn btn-primary w-25 d-block " href="/department">
          Back</a> 
      </div> 
      @endsection