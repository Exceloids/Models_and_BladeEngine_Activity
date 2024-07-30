
@include('layouts.header')

@section('content')
    <h1>Book List</h1>
    <table>
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->published_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@include('layouts.footer')
