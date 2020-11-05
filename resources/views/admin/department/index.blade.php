@extends('admin')
@section('content')

<div class="mt-1 table-responsive-sm table-responsive-md table-responsive-lg">
  <table class="table  table-light table-hover text-light text-center text-dark table-borderless">
    <thead>
      <tr style="background-color: #212121;" class="text-white">
        <th scope="col">id</th>
        <th scope="col">Department Name</th>
        <th scope="col">created At</th>
        <th scope="col">Updated At</th>
        <th scope="col">show</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($departments as $department)
      <tr>
        <th  scope=" row">{{$department['id']}}</th>
        <td>{{$department['name']}}</td>
        <td >{{$department['created_at']}}</td>
        <td>{{$department['updated_at']}}</td>
        <td ><a class=" btn btn-info " 
            href="department/{{$department['id']}}">Show
          </a></td>
        <td><a class=" btn btn-warning" 
            href="department/{{$department['id']}}/edit">Update
          </a></td>
        <td >
          <form action=" department/{{$department['id']}}" method="post">
            @csrf
            @method("delete")
            <button type="submit" class="btn btn-danger " >Delete </button>
          </form>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  <a class="btn btn-outline-info mb-3 d-block m-auto w-25" href="department/create">Add Department</a>
</div>
@endsection