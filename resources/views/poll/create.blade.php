


{{-- {!! Form::open(['route' => ['answer.store', $question->id], 'method' => 'post']) !!}
 
    <div class="form-group">
        <label for="">Poll name:</label><br>
    {!! Form::input('question', $answer->text, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        <label for="">Poll description:</label><br>
        {!! Form::textarea('description', $answer->text, ['class' => 'form-control']) !!}
    </div>
 
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
 
{!! Form::close() !!} --}}

<form action="/poll/create" method="post">
    @csrf

    <label for="">Add you poll?</label>
    <input name="question" type="text">

    <label for="">Describe your poll</label>
    <textarea name="description" type="text" cols="30" rows="10"></textarea>

    <input type="submit" value="Submit">
</form>