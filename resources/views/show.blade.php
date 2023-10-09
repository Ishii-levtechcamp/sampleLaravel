<x-app-layout>
    <div class="content-base">
        <h1 class="page-title">
            {{ $post->title }}
        </h1>
        <div class="content__post">
            <h2 class="page-title">本文</h2>
            <p class="show-content">{{ $post->body }}</p>        
        </div>
        <div class="footer">
            <a href="/">◀︎ 戻る</a>
        </div>
        <a href="{{route('edit',$post->id)}}">◀︎ edit </a>
     </div>
</x-app-layout>