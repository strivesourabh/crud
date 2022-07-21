@extends('layouts.app')
@section('content')


@foreach ($cruds as $user)
    {{ $user->name }} <br>
    {{ $user->email }} <br>
    {{ $user->contact }} <br>
    {{ $user->city }} <br>
    {{ $user->country }} <br>
    <td><img width="200" src="{{asset("upload/".$user->filename)}}" alt="as"></td>
 
@endforeach



@endsection
                