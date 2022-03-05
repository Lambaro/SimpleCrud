<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>My Blog></title>

</head>
<body>

    <div style="width: 900px" class="container max-w-full mx-auto pt-4">
        <h1 class="text-4xl mb-4 font-bold">My blog</h1>

        <a href="/posts/create" class="bg-blue-500 tracking-wide text-white my-4 px-6 py-2 inline-block mb-6 shadow-lg
                    rounded hover:shadow">Create new post</a>

        @foreach($posts as $post)

            <div class="mb-4">

                <a href="/posts/{{$post->id}}/edit" class="text-x1 font-bold text-blue-500">{{$post->title}}</a>
                <p class="text-md text-gray-500">
                    {{ $post->content }}
                </p>
            </div>

            <hr class="mt-5">
        @endforeach

    </div>


</body>
</html>
