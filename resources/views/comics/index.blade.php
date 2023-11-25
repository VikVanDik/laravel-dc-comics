@extends('layouts.main')

@section("content")

<div class="container my-5">
    <h1>Lista fumetti</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Tipo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Azioni</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                <th>{{$comic['title']}}</th>
                <td>{{$comic['series']}}</td>
                <td>{{$comic['type']}}</td>
                <td>{{$comic['price']}}</td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                    <a href="#" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>

                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection

