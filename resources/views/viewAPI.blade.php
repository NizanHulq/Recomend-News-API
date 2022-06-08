<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<button>
    <a href="{{ route('create') }}">Add Articles</a>
</button>

<body>
    <table>
        <thead>
            <tr>
                <th>Author</th>
                <th>Title</th>
                <th>Description</th>
                <th>Url</th>
                <th>UrlToImage</th>
                <th>PublishedAt</th>
                <th>Content</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <td>{{ $article['author'] }}</td>
                <td>{{ $article['title'] }}</td>
                <td>{{ $article['description'] }}</td>
                <td>{{ $article['url'] }}</td>
                <td>{{ $article['urlToImage'] }}</td>
                <td>{{ $article['publishedAt'] }}</td>
                <td>{{ $article['content'] }}</td>
                <td>
                    <a href="{{ route('edit', $article['id']) }}">Edit</a>
                    <a href="{{ route('delete', $article['id']) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>