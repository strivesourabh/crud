@extends('layouts.app')
@section('content')


@foreach ($cruds as $item)
    {{ $item->name }}
    {{ $item->email }}
    {{ $item->contact }}
    {{ $item->city }}
    {{ $item->country }}
@endforeach



@endsection
                