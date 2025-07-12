<h1>Edit Board</h1>

<form action="{{ route('boards.update', $board) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ old('name', $board->name) }}">
    <button type="submit">Update</button>
</form>
