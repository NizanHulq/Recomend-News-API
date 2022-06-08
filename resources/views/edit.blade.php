<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{  Route('update', $articles['id'])  }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="author">Author</label>
            <input type="text" name="author" id="author" value="{{ $articles['author'] }}">
        </div>
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $articles['title'] }}">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="{{ $articles['description'] }}">
        </div>
        <div>
            <label for="url">Url</label>
            <input type="text" name="url" id="url" value="{{ $articles['url'] }}">
        </div>
        <div>
            <label for="urlToImage">UrlToImage</label>
            <input type="text" name="urlToImage" id="urlToImage" value="{{ $articles['urlToImage'] }}">
        </div>
        <div>
            <label for="publishedAt">PublishedAt</label>
            <input type="datetime-local" name="publishedAt" id="publishedAt" value="{{ $articles['publishedAt'] }}">
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10">{{ $articles['content'] }}</textarea>
        </div>
        <button type="submit">Submit</button>
        <button>
            <a href="/view">Back</a>
        </button>
    </form>
</body>

</html>