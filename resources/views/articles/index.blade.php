<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite(['./resources/css/app.css', './resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <title>Document</title>
</head>

<body>
    <div class="container p-5">
        <h1 class="text-2xl mb-5">글목록</h1>
        @foreach ($articles as $article)
            <div class="background-white border rounded mb-3 p-3">
                <p>{{ $article->body }}</p>
                <p>{{ $article->user->name }}</p>
                {{-- <p>{{ $article->created_at }}</p> --}}
                <p><a href="/articles/{{$article->id}}">{{ $article->created_at->diffForHumans() }}</p>
            </div>
        @endforeach
    </div>

    <div class="container p-5">
        {{ $articles->links() }}
    </div>

   
</body>

</html>
