<a href="{{route('categories.create')}}">Create</a>

<ul>
@foreach ($categories as $category)
<li><a href="{{route('categories.show', $category->id)}}"> {{ $category->name}} ({{ $category->status}} )</a></li>
@endforeach
</ul>