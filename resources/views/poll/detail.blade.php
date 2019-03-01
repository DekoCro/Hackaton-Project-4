

    <div>
        <h4>Poll {{ $poll->id }}:</h4>
        <h2>{{ $poll->question }}</h2>
        <p>{{ $poll->description }}</p>
        <a href="{{route('poll.edit', ['id' => $poll->id])}}">Edit</a>
        <ul>
        @foreach($options as $option)
        @if($poll->id == $option->poll_id)
        <li>{{$option->name}}</li>
        @endif 
        @endforeach
        </ul>
    </div>