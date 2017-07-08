<h1>{{$category->name}} </h1>
{{$category->status}} 
{{$category->rigiToba}}</br>
<a href="{{route('categories.edit', $category->id)}}"> edit </a>