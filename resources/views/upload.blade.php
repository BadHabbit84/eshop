@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-3 offset-md-2">
		<div class="form">
			<form action="{{ url('store') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="item-name">Item Name</label>
					<div class="input-group mb-3">
						<input type="text" class="form-control" id="item-name" name="item-name" value="{{ old('item-name') }}">
					</div>
					<div class="text-danger"> <span>{{$errors->first('item-name')}}</span></div>
				</div>
				<div class="form-group">
					<label for="item-short-description">Item short description</label>
					<div class="input-group mb-3">
						<input type="text" class="form-control" id="item-short-description" name="item-short-description" value="{{ old('item-short-description') }}">
					</div>
				</div>
				<div class="form-group">
					<label for="item-long-description">Item detailed description</label>
					<div class="input-group mb-3">
						<textarea class="form-control" id="item-long-description" name="item-long-description" rows="4">{{ old('item-long-description') }}</textarea>
						
					</div>
				</div>
				<div class="form-group">
					<label for="quantity">Choose category</label>
					<div class="input-group">
						<select class="input-group" name="item-category-id" value="{{ old('item-category-id') }}">
							@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->category_name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="quantity">Quantity</label>
					<div class="input-group">
						<select class="input-group" name="quantity">
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="item-price">Price(/each)</label>
					<div class="input-group">
						<input type="text" class="form-control" name="item-price" id="item-price" value="{{ old('item-price') }}">
					</div>
				</div>
				<div class="form-group">
					<label for="item-price-currency">Currency</label>
					<div class="input-group">
						<select class="form-control" name="item-price-currency" id="item-price-currency">
							@foreach($currencies as $currency)
								<option value="{{$currency->id}}">{{$currency->currency_name}}({{$currency->currency_ISO_3}})</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="item-notes">Notes</label>
					<div class="input-group">
						<textarea class="form-control" name="item-notes" id="item-notes" rows="3">{{old('item-notes')}}</textarea>
					</div>
				</div>


				<label>Choose image to upload</label><br />
				<input type="file" name="file"> <br />
				<input type="submit" value="submit" class="mt-3">
			</form>
		</div>
	</div>
</div>

@endsection