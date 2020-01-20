@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-8 offset-md-2">
		<!-- Successfully Uploaded Item -->
		@if(session('status') == 'success')
			<div class="text-success text-center"><h3>Youre Item has benn uploded successfully!</h3></div>		
		@endif


		<!-- Uploaded Item details -->		
		<div>
			@foreach($last_uploaded_item as $last_item)
				<h5>Your Items details</h5>
				<div>
					{{$last_item->item_name}}
				</div>
				<div>
					{{$last_item->item_description}}
				</div>
				<div>
					{{$last_item->item_detailed_description}}
				</div>
				<div>
					{{$last_item->category_name}}
				</div>
				<div>
					{{$last_item->item_note}}
				</div>
				<div>
					{{$last_item->item_quantity_in_stock}}
				</div>
				<div>
					{{$last_item->ISO}} {{$last_item->item_price}}
				</div>
				<div>
					{{$last_item->created_at->diffForHumans()}}
				</div>
				<!-- Access Link -->
				<a href='{{ url("user/my-items/$last_item->id") }}'> Link to item</a>
			@endforeach

			
		</div>

	




	</div>
</div>


@endsection