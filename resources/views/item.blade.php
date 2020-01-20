@extends('layouts.app')

@section('content')

@section('links')
<div class="col-md-8 offset-md-2">
	<div class="mb-2 mt-3">
		<a href="{{ url('/') }}">{{ __('home') }}</a> / <a href="{{ route('my-items') }}">{{ __('my items') }}</a> / <a href="{{ url('my-items/'.$item->id) }}">{{$item->id}}</a>
	</div>
</div>
@endsection

<div class="col-md-8 offset-md-2">
	<div class="row">
		<div class="col-md-12">
			<div>
				<h3>{{$item->item_name}}</h3>
				<h6>{{$item->item_description}}</h6>
				<div class="" style="width: 350px; height: 400px; border: 1px solid lightgrey">
					<img src="" class="" alt="my Item IMG" />
				</div>
				<div class="mt-4">
					<p>Sell price: {{$item->item_price}} in currency: {{$item->item_price_currency_id}}</p>
				</div>
				<div class="">
					<p>
						Category: {{$item->item_category_id}}
					</p>
				</div>
				<div class="mt-2">
					<p class=""><em>Description:</em></p>
					<div class="">
						{{$item->item_detailed_description}}
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>

@endsection