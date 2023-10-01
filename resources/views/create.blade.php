<x-app-layout>
    <div class="content-base">
        <h1 class="page-title">記事を作成しよう！</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="input-div">
                <h2 class="input-item">タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="input-div">
                <h2 class="input-item">本文</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <x-secondary-button>保存</x-secondary-button>
        </form>
        <div class="back">
            <a href="/">◀︎ back</a>
        </div>
    </div>
</x-app-layout>