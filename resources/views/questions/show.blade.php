@extends('web.main')

@section('content')
    <h1>{{ $question->title }}</h1>
    <p class="lead">{{ $question->description }}</p>
    <hr />

    @if($question->answers->count() >0)
        @foreach($question->answers as $answer)
            <div class="panel">
                <div class="panel-body">
                    <p>
                        {{ $answer->content }}
                    </p>
                </div>
            </div>
        @endforeach
    @else
        <p>No Answer Yet!</p>
    @endif

    <hr />

    <form action="{{ route('answers.store') }}" method="POST">
        {{ csrf_field() }}
        <h4>Submit Your Own Answer:</h4>
        <textarea class="form-control" name="content" rows="4"></textarea>
        <input type="hidden" value="{{ $question->id }}" name="question_id" />
        <input type="submit" class="btn btn-primary" value="Submit Answer" />
    </form>
@endsection