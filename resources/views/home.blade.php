@extends('layouts.app')

@section('content')
    <ul>
        @foreach($items as $item)
            <li>{{$item['title']}}</li>
            <button id="{{$item['id']}}" type="button">Delete posts</button>
        @endforeach
    </ul>

@endsection
