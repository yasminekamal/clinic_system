@extends('admin')
@section('content')
<div class=" mt-1 table-responsive-sm table-responsive-md table-responsive-lg text-dark container">
  <h2>Show User</h2>
  <table  class="table text-dark  text-center bg-light " style="font-size:18px;font-weight:bold">
    <tr>
      <th class="bg-primary text-white w-25">id</th>
      <td>{{$user['id']}}</td>
    </tr>
    <tr>
      <th class="bg-primary text-white w-25">Name</th>
      <td>{{$user['name']}}</td>
    </tr>
    <tr>
      <th class="bg-primary text-white w-25">Email</th>
      <td>{{$user['email']}}</td>
    </tr>
    <tr>
      <th class="bg-primary text-white w-25">Type</th>
      <td>{{$user['type']}}</td>
    </tr>
    <tr>
      <th class="bg-primary text-white w-25">department id</th>
      <td>{{$user['dept_id']}}</td>
    </tr>
    

    </table>
      <a class="btn btn-primary w-25 " href="/user">
          Back</a> 
          
         </div> @endsection