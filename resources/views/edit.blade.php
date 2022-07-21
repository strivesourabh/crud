@extends('layouts.app')
@section('content')
@foreach ($cruds as $user)
<form class="form" action="{{ url('edit', $user->id) }}" method="post" >
    @csrf
    
    <input type="text" name="name" id="name" value=" {{ $user->name }}">
    <input type="text" name="email" id="email"  value=" {{ $user->email }}">
    <input type="text" name="contact" id="contact" value=" {{ $user->contact }}">
    <input type="text" name="city" id="city" value=" {{ $user->city }}">
    <input type="text" name="country" id="country" value=" {{ $user->country }}">
    <input type="submit" value="Update">
</form>
@endforeach
@endsection