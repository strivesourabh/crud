@extends('layouts.app')
@section('content')

<div class="container my-5">
    <h1>Registration Page</h1>
    <form class="w-25" action="{{route('datastore')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" >
          </div>
        <div class="mb-3">
            
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"  name="email">
          </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country">
        </div>
        <div class="mb-3">
          <label for="file" class="form-label">Image</label>
          <input type="file" class="form-control" id="file" name="file">
      </div>
        
        <input type="submit" class="btn btn-primary" value="Submit">
        <a href="login">Login</a>
      </form>
    <form >
</div>  
</form>
@endsection
