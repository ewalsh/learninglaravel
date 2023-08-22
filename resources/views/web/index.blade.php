@extends('web.main')

@section('content')
    @if(Auth::guest())
        <div>placeholder for guest</div>
    @else
        <div>placeholder for logged in users</div>
    @endif
@endsection
