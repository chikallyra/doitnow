<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>tabel category</h1>
    <table>
        <tr>
            <td>id</td>
            <td>nama</td>
            <td>desc</td>
        </tr>
        @foreach ($category as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->name }}</td>
            <td>{{ $cat->desc }}</td>
        </tr>
        @endforeach
    </table>

    <h1>tabel reward</h1>
    <table>
        <tr>
            <td>id</td>
            <td>reward</td>
        </tr>
        @foreach ($rewards as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->reward }}</td>
        </tr>
        @endforeach
    </table>

    <h1>tabel blog</h1>
    <table>
        <tr>
            <td>id</td>
            <td>title</td>
            <td>excerpt</td>
            <td>category</td>
        </tr>
        @foreach ($blogs as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->title }}</td>
            <td>{{ $cat->excerpt }}</td>
            <td>{{ $cat->blog_category_id }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>