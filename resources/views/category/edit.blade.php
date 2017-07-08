<form  action="{{route('categories.update', $category->id)}}" method="post">
	{{csrf_field()}}
	 <input type="hidden" name="_method" value="PUT">
	<p>
	{{ $errors->first('name') }}
		<input type="text" name="name" value="{{ ($category->name)  }}">
	</p>
	<p>
	{{ $errors->first('state') }}
	 <select name="status">
  <option value="active">active</option>
  <option value="passive">passive</option>
  
    </select>
		
	</p>
	<p>
		{{ $errors->first('rigiToba') }}

		<input type="integer" name="rigiToba" value="{{ ($category->rigiToba)  }}">
	</p>
		<button type="submit" name="">save</button>
</form>

