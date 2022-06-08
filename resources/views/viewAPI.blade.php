<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a44f724332.js" crossorigin="anonymous"></script>
    <style>
        html, body {
            background-color: #fff;
            color: #555;
            font-family: 'Open Sans', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>

<button>
    <a href="{{ route('create') }}">Add Articles</a>
</button>

<body>
    <!-- <table>
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
    </table> -->
    <div class="container-fluid">
        <div class="p-5">
            <h2>Rekomendasi Berita</h2>
            <a href="{{ route('create') }}" class="btn btn-success mb-2">Add Articles +</a>
            <div class="row">
                @foreach ($articles as $article)
                <div class="col my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $article['urlToImage'] }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article['title'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $article['publishedAt'] }}</h6>
                            <h6 class="card-subtitle mb-2"><b>{{ $article['author'] }}</b></h6>
                            <p class="card-text">{{ $article['description'] }}</p>
                            <p class="card-text">{{ $article['content'] }}</p>
                            <a href="{{ $article['url'] }}" class="btn btn-success">Visit</a>
                            <a href="{{ route('edit', $article['id']) }}" class="btn btn-outline-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="{{ route('delete', $article['id']) }}" class="btn btn-outline-danger"><i class="fa-regular fa-trash-can"></i></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>