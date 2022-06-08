<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a44f724332.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css">
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

<body>
    <form action="{{  Route('update', $articles['id'])  }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" name="author" id="author" value="{{ $articles['author'] }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $articles['title'] }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description" value="{{ $articles['description'] }}">
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Url</label>
            <input type="text" class="form-control" name="url" id="url" value="{{ $articles['url'] }}">
        </div>
        <div class="mb-3">
            <label for="urlToImage" class="form-label">UrlToImage</label>
            <input type="text" class="form-control" name="urlToImage" id="urlToImage" value="{{ $articles['urlToImage'] }}">
        </div>
        <div class="mb-3">
            <label for="publishedAt" class="form-label">PublishedAt</label>
            <input type="datetime-local" class="form-control" name="publishedAt" id="publishedAt" value="{{ $articles['publishedAt'] }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" name="content" id="content" rows="3">{{ $articles['content'] }}</textarea>
        </div class="mb-3">
        <button type="submit" class="btn btn-success">Submit</button>
        <button>
            <a href="/view" class="btn btn-outline-secondary">Back</a>
        </button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('#publishedAt').datetimepicker();
    </script>
</body>

</html>