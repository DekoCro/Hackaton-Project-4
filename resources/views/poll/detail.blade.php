

<div>
    <h4>Poll {{ $poll->id }}:</h4>
    <h2>{{ $poll->question }}</h2>
    <p>{{ $poll->description }}</p>
    <a href="{{route('poll.edit', ['id' => $poll->id])}}">Edit</a>
    <ul>
    @foreach($options as $option)
    @if($poll->id == $option->poll_id)
    <li>{{$option->name}}<br>Rating: {{$option->rating}}</li>
    <form action="{{ action('OptionController@vote', $option->id) }}" method="post">
            @csrf
            <input type="submit" name="up" value="+1">
            <input type="submit" name="down" value="-1">
    </form>
    @endif 
    @endforeach
    </ul>
</div>