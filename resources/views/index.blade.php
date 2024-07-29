@extends('_header')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Book List</h2>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Author</th>
                <th class="px-4 py-2">ISBN</th>
                <th class="px-4 py-2">Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td class="px-4 py-2">{{ $book->title }}</td>
                    <td class="px-4 py-2">{{ $book->author }}</td>
                    <td class="px-4 py-2">{{ $book->isbn }}</td>
                    <td class="px-4 py-2">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@include('_footer')
