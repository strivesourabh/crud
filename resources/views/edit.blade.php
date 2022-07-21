@extends('layouts.app')
@section('content')
@foreach ($cruds as $user)

<form class="form" action="{{ url('edit', $user->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row-4">
        <input type="text" name="name" id="name" value=" {{ $user->name }}">
    </div>
    <div class="row-4">
        <input type="text" name="email" id="email"  value=" {{ $user->email }}"><br>
    </div>
    <div class="row-4">
        <input type="text" name="contact" id="contact" value=" {{ $user->contact }}"><br>
    </div>
    <div class="row-4">
        <input type="text" name="city" id="city" value=" {{ $user->city }}"><br>
    </div>
    <div class="row-4">
        <input type="text" name="country" id="country" value=" {{ $user->country }}"><br>
    </div>
    <div class="row-4">
        <input type="file" name="file" id="file">
    <td><img width="200" src="{{asset("upload/".$user->filename)}}" alt="as"></td><br>
    </div>
    <input type="submit" value="Update">
</form>
@endforeach
@endsection