@extends('layouts.appdoctor')

@section('content')
     hello {{Auth::user()->name}}
@endsection
