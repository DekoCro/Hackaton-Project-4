<form action="/poll/create" method="post">
    @csrf

    <label for="">Add you poll?</label>
    <input name="question" type="text">

    <label for="">Describe your poll</label>
    <textarea name="description" type="text" cols="30" rows="10"></textarea>

    <label for="">How many options you need?</label>
    <input type="number" name="nr_of_options">

    <input type="submit" value="Submit">
</form>