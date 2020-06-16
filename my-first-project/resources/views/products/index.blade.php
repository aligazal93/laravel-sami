@extends('layout')
@section('title' , 'Customer List')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{ url('/products/create') }}"> Add New Product </a>
            <h3 class="text-center pb-4">All Products</h3>
        </div>
        <div class="col-sm-12">

            @if(session()-> has('message'))
                <div class="alert alert-info">
                    {{ session() -> get('message') }}
                </div>
            @endif

            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif

            <form action="search" method="get">
                <div class="form-group">
                    <input type="text" name="search" class="form-control" placeholder="Seach here...">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>

            </form>
        </div>

        @if($products->count())
            @foreach($products as $product)
                <div class="col-sm-4">
                    <div class="card mb-2" style="width: 18rem;">
                        <div class="card-body text-center">
                            <a href="{{url('products/show/'.$product->id)}}" class="card-title">{{$product -> name}}</a>
                            <p class="card-text"> {{$product -> desc}}</p>
                            <h5 class="text-center"> {{$product -> price}}</h5>
                            <p class="card-title">{{$product -> count}}</p>
                            <span>
                        @if( $product->available ==1)
                                    <p class="text-primary" style="font-weight: bolder" > available </p>
                                @else
                                    <p class="text-danger" style="font-weight: bolder">Not available</p>
                                @endif
                        </span>
                        </div>
                    </div>
                </div><!--col-sm-4-->
            @endforeach
            @else
            <p class="text-danger lead text-center"> No Result . Try Again </p>
        @endif




    </div>


@endsection