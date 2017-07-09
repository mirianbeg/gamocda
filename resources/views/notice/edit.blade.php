<form  action="{{route('programs.update', $program->id)}}" method="post">
	{{csrf_field()}}
	 <input type="hidden" name="_method" value="PUT">
	<p>
	Name:
	{{ $errors->first('name') }}
		<input type="text" name="name" value="{{ ($program->name)  }}">
	</p>
		

	<p>
	Faculty:
	{{ $errors->first('faculty_id') }}
	
	<select name="{{'faculty_id'}}">
	@foreach($faculties as $faculty)
		<option value="{{$faculty->id}}"
		@if ($program->faculty_id==$faculty->id)
		selected
		@endif;
		>
		{{$faculty->name}}
		</option>
	@endforeach
	</select>
	</p>
	<p>
	Mandatory credits:
	{{ $errors->first('mandatory_credits') }}
		<input type="number" name="mandatory_credits" value="{{$program->mandatory_credits  }}">
	</p>

	<p>
	Optional credits:
	{{ $errors->first('optional_credits') }}
		<input type="number" name="optional_credits" value="{{$program->optional_credits }}">
	</p>
		<button type="submit" name="">save</button>
</form>