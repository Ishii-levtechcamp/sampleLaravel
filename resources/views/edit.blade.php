<x-app-layout>
    <div class="content-base">
        <h1 class="page-title">編集画面</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-div">
                <div class='content__title'>
                    <h2 class="input-item ">タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
            </div>
            <div class="input-div">
                <div class='input-item '>
                    <h2 class="input-item ">本文</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}"/>
                </div>
            </div>
            <x-secondary-button>保存</x-secondary-button>
        </form>
    </div>
</x-app-layout>