<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Polls</title>
</head>
<body>
    
    <h2>List of polls:</h2>


    <a href="{{ url('/poll/create')}}">Create new poll</a>

    
    @foreach($polls as $poll)
    
    <div>
        <h3>Poll {{ $poll->id }}:</h3>
        <h4>{{ $poll->question }}</h4>
        <p>{{ $poll->description }}</p>
        <a href="{{route('poll.edit', ['id' => 1])}}">Edit</a>
        <ul>
        @foreach($options as $option)
        @if($poll->id == $option->poll_id)
        <li>{{$option->name}}</li>
        @endif
        @endforeach
        </ul>
    </div>
    @endforeach
</body>
</html>