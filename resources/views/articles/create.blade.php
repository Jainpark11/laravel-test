<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="container p-5">
        <h1>글쓰기</h1>
        <form action="/articles" method="POST">
            <input type="text" class="block w-100 mb-2">
            <input type="button" value="저장하기" class="py-1 px-3 bg-black text-white rounded text-xs">
        </form>
    </div>
</body>

</html>
