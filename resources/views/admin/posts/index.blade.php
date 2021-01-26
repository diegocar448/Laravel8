<a href="{{route('posts.create')}}">Criar Novo Post</a>
<h1>Posts</h1>
@csrf
@foreach($posts as $post)
<p>{{$post->content}}</p>

@endforeach

