<h1>Boards</h1>
<a href="{{ route('boards.create') }}">Create New Board</a>

<ul>
    @foreach($boards as $board)
        <li>
            {{ $board->name }}
            <a href="{{ route('boards.edit', $board) }}">Edit</a>
            <form action="{{ route('boards.destroy', $board) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
