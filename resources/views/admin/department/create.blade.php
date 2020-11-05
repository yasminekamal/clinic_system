@extends('admin')
@section('content')

    <div class="container mt-5 text-dark">
        <h2>Add New Department</h2>
        <form action="/department" method="post">
            @csrf
            <div class="form-group">
                <label>Department Name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                <label class="text-danger">{{$errors->first("name")}}</label>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>

    </div>
@endsection
