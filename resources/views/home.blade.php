@extends('layouts.app')
@section('content')
    
<h1>You can not access our web</h1>
            <table class="border">
                <tr>
                <td>name</td>
                <td>email</td>
                <td>contact</td>
                <td>city</td>
                <td>country</td>
                    <td>Action</td>
                </tr>

                @foreach ($cruds as $user)
                <tr>
                <td>{{ $user->name }}</td>
                
                <td>{{ $user->email }}</td>
                <td>{{ $user->contact }}</td>
                <td>{{ $user->city }}</td>
                <td>{{ $user->country }}</td>
                <td><a href="view/{{ $user->id }}">View</a> <a href="edit/{{ $user->id }}">Edit</a> <a href="#">Delete</a></td>
                </tr>
            @endforeach
            </table>  


@endsection
 