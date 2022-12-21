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
                <td class="text-center">
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>