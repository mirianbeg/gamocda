<form  action="{{route('notices.update',  $notice->id)}}" method="post">
	{{csrf_field()}}
 <input type="hidden" name="_method" value="PUT">

	<p>
	Title:
	{{ $errors->first('title') }}
		<input type="text" name="title" value="{{$notice->title }}">
	</p>
	<p>
	Category:
	{{ $errors->first('category_id') }}
	
	<select name="{{'category_id'}}">
	@foreach($categories as $category)
		<option value="{{$category->id}}"
		@if (old('category_id')==$category->id)
		selected
		@endif;
		>
		{{$category->name}}
		</option>
	@endforeach
	</select>
	</p>
	<p>
	Photos:
	{{ $errors->first('photos') }}
		<input type="text" name="photos" value="{{$notice->photos  }}">
	</p>
	<p>
	Description:
	{{ $errors->first('description') }}
		<input type="text" name="description" value="{{ $notice->description }}">
	</p>

	<p>
	Count:
	{{ $errors->first('count') }}
		<input type="number" name="count" value="{{$notice->count  }}">
	</p>
	<p>
	Author name:
	{{ $errors->first('author_name') }}
		<input type="text" name="author_name" value="{{$notice->author_name  }}">
	</p>
	<p>
	Author Email:
	{{ $errors->first('author_email') }}
		<input type="text" name="author_email" value="{{$notice->author_email  }}">
	</p>
	<p>
	Status:
	<select name="status">
  <option value="active">active</option>
  <option value="passive">passive</option>
  
    </select>
	
	</p>

		<button type="submit" name="">save</button>
</form>