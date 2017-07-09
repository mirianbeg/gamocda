<h1>{{$notice->title}}</h1>

<p>
    {{ $notice->category->name }}
</p>
<p>
 
<a href="{{route('notices.edit', $notice->id)}}"> edit </a>  
</p>

