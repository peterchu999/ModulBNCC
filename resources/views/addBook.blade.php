<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/add-book')}}" method="POST">
        @csrf
        @isset($book)
            <h1>Edit Book</h1>
            <input type="hidden" name="id" value="{{$book->id}}">
            <input type="text" name="nama" value="{{$book->book_name}}" placeholder="nama"><br>
            <input type="text" name="warna" value="{{$book->book_color}}" placeholder="warna"><br>
            <input type="text" name="tahun" value="{{$book->book_year}}" placeholder="tahun"><br>
            <button type="submit" formaction="{{url('/update')}}">Update Book</button>
        @else
            <input type="text" name="nama" placeholder="nama"><br>
            <input type="text" name="warna" placeholder="warna"><br>
            <input type="text" name="tahun" placeholder="tahun"><br>
            <input type="submit">
        @endisset
    </form>
</body> 
</html>