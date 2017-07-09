@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @foreach ($categories as $category)
<li><a href="{{route('categories.show', $category->id)}}"> {{ $category->name}} ({{ $category->status}} )</a></li>
@endforeach
</ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
