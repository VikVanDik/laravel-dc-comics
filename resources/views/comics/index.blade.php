@extends('layouts.main')

@section("content")
@foreach ($comics as $comic)
    <div>
        {{$comic['title']}}
    </div>
@endforeach
@endsection

