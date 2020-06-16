@extends('layout')
@section('title' , 'Customer List')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center pb-4">The Product</h3>
        </div>

            <div class="col-sm-12">
                <div class="card mb-2" style="width:100%;">
                    <div class="card-body text-center">
                        <a class="card-title">{{$product -> name}}</a>
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



    </div>


@endsection