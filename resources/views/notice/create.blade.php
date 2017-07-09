<form  action="{{route('notices.store')}}" method="post">
	{{csrf_field()}}
	<p>
	Title:
	{{ $errors->first('title') }}
		<input type="text" name="title" value="{{old('title')  }}">
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
		<input type="text" name="photos" value="{{old('photos')  }}">
	</p>
	<p>
	Description:
	{{ $errors->first('description') }}
		<input type="text" name="description" value="{{old('description')  }}">
	</p>

	<p>
	Count:
	{{ $errors->first('count') }}
		<input type="number" name="count" value="{{old('count')  }}">
	</p>
	<p>
	Author name:
	{{ $errors->first('author_name') }}
		<input type="text" name="author_name" value="{{old('author_name')  }}">
	</p>
	<p>
	Author Email:
	{{ $errors->first('author_email') }}
		<input type="text" name="author_email" value="{{old('author_email')  }}">
	</p>
	<p>
	Status:
	{{ $errors->first('status') }}
		<input type="text" name="status" value="{{old('status')  }}">
	</p>

		<button type="submit" name="">save</button>
</form>