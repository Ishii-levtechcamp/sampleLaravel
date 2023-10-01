<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            <div class='post'>
                @foreach($posts as $post)
                <h2 class='title'>
                    <a href="/show/{{ $post->id }}">
                        {{ $post->title }}
                    </a>
                </h2>
                <p class='body'>{{ $post->body }}</p>
                <form action="/posts/{{ $post->id }}/delete" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </form>
              @endforeach
            </div>
        </div>
        <a href='/create'>create</a>
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>