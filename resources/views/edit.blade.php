@extends('layouts.app')
@section('content')
@foreach ($cruds as $user)

<div class="container">
    <div class="card">
        <div class="card-body">
        <h1 class="card-text">Update Info</h1>
        <form class="form" action="{{ url('edit', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="my-3">
                <input type="text" class="form-control" name="name" id="name" value=" {{ $user->name }}">
            </div>
            <div class="my-3">
                <input type="text" class="form-control" name="email" id="email"  value=" {{ $user->email }}"><br>
            </div>
            <div class="my-3">
                <input type="text" class="form-control" name="contact" id="contact" value=" {{ $user->contact }}"><br>
            </div>
            <div class="my-3">
                <input type="text" class="form-control" name="city" id="city" value=" {{ $user->city }}"><br>
            </div>
            <div class="my-3">
                <input type="text" class="form-control" name="country" id="country" value=" {{ $user->country }}"><br>
            </div>
            <div class="my-3">
                <input type="file" class="form-control" name="file" id="file">
            <td><img width="200" class="my-4" src="{{asset("upload/".$user->filename)}}" alt="as"></td><br>
            </div>
            <input type="submit" class="btn btn-primary" value="Update">
        </form>
    </div>
    </div>
</div>
@endforeach
@endsection