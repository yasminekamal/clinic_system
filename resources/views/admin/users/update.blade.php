@extends('admin')
@section('content')
<div class="container mt-5 text-dark">
    <h2>Update User</h2>
    <form action="/user/{{$user['id']}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label>user Name</label>
            <input type="text" class="form-control" value="{{$user['name']}}" name="name" aria-describedby="emailHelp" disabled>

        </div>
        <div class="form-group">
            <label>User Email</label>
            <input type="text" class="form-control" value="{{$user['email']}}" name="email" disabled>

        </div>
       @php
         $types = ['admin','doctor','normal'];
        
       @endphp
        <div class="form-group">
            <label>Type</label>
            <select  name="type">
            @foreach($types as $type)
            <option value="{{$type}}" @if($type == $user['type']) selected @endif>{{$type}}</option>
           
            @endforeach
        </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-info" href="/user">cancel</a>

    </form>

</div>
@endsection