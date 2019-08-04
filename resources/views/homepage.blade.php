<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library</title>
</head>
<body>
    @empty($books)
        @foreach($books as $book)
        <form action="{{url('/edit-book')}}" method="POST">
                @csrf
                {{$book->id}}|&nbsp;{{$book->book_name}}&nbsp;|&nbsp;{{$book->book_color}}&nbsp;|&nbsp;{{$book->book_year}}&nbsp;
                <input type="hidden" name="id" value="{{$book->id}}">
                <button type="submit">Edit</button>&nbsp;
                <button type="submit" formaction="{{url('/delete-book')}}">Delete</button>
                <br>
            </form>
        @endforEach
    @else
        <h1>Tidak ada buku yang tersedia</h1>
    @endempty
</body>
</html>