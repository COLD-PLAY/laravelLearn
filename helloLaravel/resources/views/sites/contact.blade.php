@extends('app')
@section('content')
    Contact Page:
    @if(count($people) > 0)
    <ul>
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
    @endif


@stop
