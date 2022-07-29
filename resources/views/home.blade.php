@extends('layouts.app')
@section('content')
    
<div class="mx-auto">
    <a class="btn btn-primary text-right" href="/registration">Add User</a>


            <table class="border data-table text-center">
                <tr>
                    <td>name</td>
                    <td>email</td>
                    <td>contact</td>
                    <td>city</td>
                    <td>country</td>
                    <td>profile</td>
                    <td>Action</td>
                </tr>

                @foreach ($cruds as $user)
                <tr>
                <td name="name">{{ $user->name }}</td>
                
                <td name="email">{{ $user->email }}</td>
                <td>{{ $user->contact }}</td>
                <td>{{ $user->city }}</td>
                <td>{{ $user->country }}</td>
                <td><img width="150" src="{{asset("upload/".$user->filename)}}" alt="as"></td>
                <td><a href="view/{{ $user->id }}"><i class="bi bi-person text-success fs-5"></i></a> 
                    <a href="edit/{{ $user->id }}"><i class="bi bi-pencil-square text-info fs-5"></i></a> 
                    <a href="delete/{{ $user->id }}"><i class="bi bi-trash text-danger fs-5"></i></a></td>
                </tr>
            @endforeach
            </table>  
        </div>
            <script type="text/javascript">
                $(function () {
                  
                  var table = $('.data-table').DataTable({
                      processing: true,
                      serverSide: true,
                      ajax: "{{ 'home' }}",
                      columns: [
                        
                          {data: 'name', name: 'name'},
                          {data: 'email', name: 'email'},
                          {data: 'action', name: 'action', orderable: false, searchable: false},
                      ]
                  });
                  
                });
              </script>
@endsection
 