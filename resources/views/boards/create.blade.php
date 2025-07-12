<h1>Create Board</h1>

<form action="{{ route('boards.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Board name">
    <button type="submit">Create</button>
</form>
