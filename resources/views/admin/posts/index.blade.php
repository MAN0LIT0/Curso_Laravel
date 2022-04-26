<h1>Posts</h1>
<a href="{{ route('posts.create') }}">Cria novo post</a>
@foreach ($posts as $post)
    <p>{{ $post->title }}</p>
@endforeach
