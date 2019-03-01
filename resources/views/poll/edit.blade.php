<h1>Edit poll:</h1>


<form method="post" action= " {{ action('PoleController@update', $poll->id)}}">

        @csrf
        <input type="hidden" name="_method" value="post"/>
        {{-- or --}}
        {{ method_field('put')}}
    
        <div class="form-group">
          <label>Poll name:</label>                            {{-- // day 42 Book project task CRUD --}}
          <input type="text" name="question" class="form-control" value=" {{ $poll->question }} ">
        </div>
        <div class="form-group">
          <label>Poll description:</label>                          {{-- // day 42 Book project task CRUD --}}
          <textarea type="text" name="description" class="form-control">{{ $poll->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit Poll</button>
      </form>
    