<table class="table">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Serie</th>
        <th scope="col">Anno</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{ $comic->title }}</th>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i></i></a>

                    <form class="d-inline" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit"><i class="fa-solid fa-x"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>