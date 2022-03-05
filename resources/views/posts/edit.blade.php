<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>My Blog</title>

</head>
<body>
<div style="width: 900px" class="container mx-auto pt-4">

    <form action="/posts/{{$post->id}}" method="POST">
        @method('PUT')
        @csrf

        <div class="mb-4">
            <label for="title" class="font-bold text-gray-800">Title:</label>
            <input name="title" id="title" value="{{ $post->title }}" class="h-10 bg-white border border-gray-300 px-3 mr-4
                    w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">
        </div>

        <div class="mb-4">
            <label for="content" class="font-bold text-gray-800">Content:</label>
            <textarea name="content" id="content" class="h-16 bg-white border border-gray-300 px-3 mr-4
                    w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">{{ $post->content }}
            </textarea>
        </div>

        <button class="bg-blue-500 tracking-wide text-white w-28 text-center py-2 mb-6 shadow-lg inline-block
                    rounded hover:shadow ">Update
        </button>

        <a href="/posts" class="bg-gray-500 tracking-wide text-white text-center w-28 py-2 mb-6 shadow-lg inline-block
                    rounded hover:shadow ">Cancel</a>

    </form>

    <form action="/posts/{{ $post->id }}" method="POST">

        @csrf
        @method('DELETE')

        <button class="bg-red-500 tracking-wide text-white text-center w-28 py-2 mb-6 shadow-lg inline-block
                    rounded hover:shadow ">Delete
        </button>
    </form>

</div>


</body>
</html>
