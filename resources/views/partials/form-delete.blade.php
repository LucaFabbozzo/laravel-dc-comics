<form
    onsubmit="return confirm('Confirm the elimination of {{$comic->title}}?')"
    class="d-inline" action="{{route('comics.destroy', $comic)}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-outline-danger" title="delete"><i class="fa-regular fa-trash-can"></i></button>
</form>
