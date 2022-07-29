@extends('layouts.app')
@section('content')
    <div class="container-fluid my-5 w-25">
        <h2 class="text-center">Login</h2>
        <form action="{{route('login')}}"  class="form" method="post">
            @csrf
            <div class="mb-3">
                <div class="row text-center my-2"><input type="text" name="email" id="username" placeholder="user name"></div>
            </div>
            
            <div class="row text-center border my-2"><input type="password" name="password" id="password" placeholder="password"></div>
            <div class="row text-center my-2">
                <div class="col"><input type="submit" value="submit"></div>
                <div class="col"><a href="registration">Registration</a></div>
            </div>
        </form>
    </div>
@endsection

