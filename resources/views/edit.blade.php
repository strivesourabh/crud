@extends('layouts.app')
@section('content')
@foreach ($cruds as $item)
<form class="form" action="{{ url('edit', $item->id) }}" method="post" >
    @csrf
    
    <input type="text" name="name" id="name" value=" {{ $item->name }}">
    <input type="text" name="email" id="email"  value=" {{ $item->email }}">
    <input type="text" name="contact" id="contact" value=" {{ $item->contact }}">
    <input type="text" name="city" id="city" value=" {{ $item->city }}">
    <input type="text" name="country" id="country" value=" {{ $item->country }}">
    <input type="submit" value="Update">
</form>
@endforeach



@endsection