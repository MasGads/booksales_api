<!DOCTYPE html>
<html>

<head>
    <title>Daftar Buku</title>
</head>

<body>
    <h1>Daftar Buku</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->name }}</td>
                <td>{{ $book->publication_year }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>