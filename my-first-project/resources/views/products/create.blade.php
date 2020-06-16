@extends('layout')
@section('title' , 'Add Product')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center pb-4">Add A New Product</h3>
        </div>

        @if(session()-> has('message'))
            <div class="alert alert-success">
                {{ session() -> get('message') }}
            </div>
        @endif

        <div class="col-sm-12">
            <form action="{{ url('products') }}" method="post" name="registration">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control mb-2" placeholder="Product Name" value="{{old('name')}}">
                    <p class="text-danger">{{$errors->first('name')}}</p>
                </div>

                <div class="form-group">
                    <input type="text" name="desc" class="form-control" placeholder="Product Description" value="{{old('desc')}}">
                    <p class="text-danger">{{$errors->first('desc')}}</p>
                </div>

                <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="Product Price" value="{{old('price')}}">
                    <p class="text-danger">{{$errors->first('price')}}</p>
                </div>
                <div class="form-group">
                    <select name="available" id="" class="form-control" >
                        <option value="" disabled> Pleace choose one  </option>
                        <option value="1"> Available </option>
                        <option value="0">Not Available </option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="number" name="count" class="form-control" placeholder="Product Count" value="{{old('count')}}">
                    <p class="text-danger">{{$errors->first('count')}}</p>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Add Product </button>
                </div>


                </div>
            </form>
        </div>


    </div>

@endsection