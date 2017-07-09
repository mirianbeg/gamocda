<a href="{{route('notices.create')}}">Create</a>

<ul>
@foreach ($notices as $notice)
<li><a href="{{route('notices.show', $notice->id)}}"> {{ $notice->title}} ({{ $notice->status}} )</a></li>
@endforeach
</ul>