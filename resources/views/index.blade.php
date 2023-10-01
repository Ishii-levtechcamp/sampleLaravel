<x-app-layout>
    <div class="content-base">
        <h1 class="page-title">Blog 投稿一覧<h1>
        <div class='posts'>
                @foreach($posts as $post)
                <div class='designed-post'>
                    <h2 class='input-item'>
                        <a href="/show/{{ $post->id }}">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <p>{{ $post->body }}</p>
                    <form action="/posts/{{ $post->id }}/delete" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">◀︎ delete</button> 
                    </form>
                </div>
              @endforeach
        </div>
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </div>
</x-app-layout>