@extends('web.main')

@section('content')
    <h1>Recent Questions: </h1>
    <hr />
    @foreach($questions as $question)
        <div class="well">
            <h3>{{ $question->title }}</h3>
            <p>{{ $question->description }}</p>
            <a href="{{ route('questions.show', $question->id) }}">View Details</a>
        </div>
    @endforeach

    {{ $questions->links() }}
@endsection