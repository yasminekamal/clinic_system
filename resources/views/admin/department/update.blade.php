@extends('admin')
@section('content')
<div class="container mt-5 text-dark">
    <h2>Update Book</h2>
    <form action="/department/{{$department['id']}}" method="post">
        @csrf
        @method("put")
        <div class="form-group">
            <label>Department Name</label>
            <input type="text" class="form-control" value="{{$department['name']}}" name="name" aria-describedby="emailHelp">
            <label class="text-danger">{{$errors->first("name")}}</label>
        </div>
        


        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-info" href="/department/{{$department['id']}}">cancel</a>

    </form>

</div>
@endsection