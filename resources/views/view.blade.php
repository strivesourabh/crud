@extends('layouts.app')
@section('content')
@foreach ($cruds as $user)
<div class="card mx-auto mt-5 text-left shadow-none p-3 mb-5 bg-light rounded" style="width: 18rem;">
    <img src="{{asset("upload/".$user->filename)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Name: {{ $user->name }} </h5>
      <p class="card-text">Email: {{ $user->email }}</p>
      <p class="card-text">Contact: {{ $user->contact }}</p>
      <p class="card-text">City: {{ $user->city }}</p>
      <p class="card-text">Country: {{ $user->country }}</p>
      <a href="/home" class="btn btn-primary">Go @ Home</a>
    </div>
  </div>
@endforeach



@endsection
                