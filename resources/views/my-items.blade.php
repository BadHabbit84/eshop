@extends('layouts.app')

@section('links')
<div class="col-md-8 offset-md-2">
	<div class="mb-2 mt-3">
		<a href="{{ url('/') }}">{{ __('home') }}</a> / <a href="{{ route('my-items') }}">{{ __('my items') }}</a>
	</div>
</div>
@endsection

@section('content')

<div class="row text-center">
		<div class="col-md-8 offset-md-2">
			<div class="form-group">
				<form class="form" action="" method="post">
					<div class="input-group">
						<input type="search" class="form-control mr-1" name="search" placeholder="Search in my items">
						<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
					</div>
				</form>
			</div>			
		</div>
	</div>

<div class="col-md-8 offset-md-2"> 

@if(count($my_items) > 0)
	@foreach($my_items as $my_item)
		<div>
			{{$my_item->item_name}} <a href="{{ url('my-items/'.$my_item->id) }}">check/edit item</a>
		</div>
	@endforeach
@else
	<div class="text-center">
		<h3> You have no items uploaded yet</h3>
	</div>
@endif


<!-- #end col 8 -->
</div>


@endsection