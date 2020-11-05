@extends('admin')
@section('content')
<div class="container mt-5 text-dark">
    <h2>Update User</h2>
    <form action="/user" method="post">
        @csrf
        <div class="form-group">
            <label>user Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label>User Email</label>
            <input type="text" class="form-control"  name="email" >

        </div>
        <div class="form-group">
            <label>User Password</label>
            <input type="text" class="form-control"  name="password" >

        </div>
        <div class="form-group">
            <label>Type</label>
            <select  name="type">
            <option value="admin">admin</option>
            <option value="doctor">doctor</option>
            <option value="normal">normal</option>
          
        </select>  
        </div>
        <div class="form-group">
            <label>department id</label>
            <select  name="dept_id">
                @foreach($departments as $department)
                <option value="{{$department['id']}}">{{$department['name']}}</option>
                @endforeach
            </select>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-info" href="/user">cancel</a>

    </form>

</div>
@endsection