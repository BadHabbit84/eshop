@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-2">
        <aside>
            <nav class="nav flex-column mt-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">Links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Links</a>
                </li>
            </nav>
        </aside>
    </div>
    <div class="col-md-8 mt-3">       
        @if(count($all_products) > 0)
        <div class="row">
            @foreach($all_products as $item)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{ asset('product-images/'.$item->id.'/table.jpeg') }}" class="img-fluid">
                        <div class="card-body">
                            <div class="card-title"> 
                                <h4>{{$item->item_name}}</h4>
                            </div>
                            <div class="card-body>">
                                {{$item->item_price}}
                            </div>
                        </div> 
                    </div>   
                </div>
            @endforeach
        </div>
        @else
            Nothing to display
        @endif
    </div>
    <div class="col-md-2 text-center mt-3">
        right sidebar
    </div>
</div>

@endsection