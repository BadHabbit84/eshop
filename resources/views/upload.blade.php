@extends('layouts.app')

@section('content')

<div class="row">
	<div class="form">
		<form action="{{url('store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>Item name</label>
				<input type="text" name="item-name">
			</div>
			<label>Choose image</label><br />
			<input type="file" name="file"> <br />
			<input type="submit" value="submit">
		</form>
	</div>
</div>

@endsection