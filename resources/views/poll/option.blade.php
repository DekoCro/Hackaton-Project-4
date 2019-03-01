<form action="/poll/option" method="post">
    @csrf

    <label for="">Option 1</label>
    <input type="text" name="name[1]">

    <label for="">Option 2</label>
    <input type="text" name="name[2]">

    <label for="">Option 3</label>
    <input type="text" name="name[3]">

    <label for="">Option 4</label>
    <input type="text" name="name[4]">

    <input type="hidden" name="poll_id" value="{{$poll_id}}">

    <input type="submit" value="Submit">

</form>