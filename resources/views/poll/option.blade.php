<form action="/poll/option" method="post">
    @csrf
    
    @for($i = 0; $i < $num; $i++)
    
    <label for="">Option {{$i}} </label>
    
    <input type="text" name="name[{{$i}}]">
    @endfor

    <input type="hidden" name="poll_id" value="{{$poll_id}}">

    <input type="submit" value="Submit">

</form>