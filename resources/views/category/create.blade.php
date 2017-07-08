<form  action="{{route('categories.store')}}" method="post">
	{{csrf_field()}}
	<p>
	Name:
	{{ $errors->first('name') }}
		<input type="text" name="name" value="{{old('name')  }}">
	</p>
	<p>
	Status:
    <select name="status">
  <option value="active">active</option>
  <option value="passive">passive</option>
  
    </select>
	</p>
	<p>
	rigiToba:
	{{ $errors->first('rigiToba') }}
		<input type="text" name="rigiToba" value="{{old('rigiToba')  }}">
	</p>

		<button type="submit" name="">save</button>
</form>