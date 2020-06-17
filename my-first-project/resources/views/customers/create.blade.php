@extends('layout')
@section('title' , 'Add Customer')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Customers List</h1>
        </div>

        <div class="col-sm-12">
            <form action="/customers" method="Post">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Customer Name" value="{{old('name')}}" class="form-control">
                    {{$errors->first('name')}}
                </div>

                <div class="form-group">
                    <input type="text" name="email" placeholder="Email Address" value="{{old('email')}}" class="form-control">
                    {{$errors->first('email')}}
                </div>

                <div class="form-group">
                    <select name="active" id="active" class="form-control">
                        <option value="" disabled> Select Customer Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <select name="company_id" id="" class="form-control" >
                        @foreach ($companies as $company)
                            <option value="{{$company -> id}}"> {{$company -> name}}  </option>
                        @endforeach

                    </select>
                </div>

                <div class="input-group">
                    <button type="submit" class="btn btn-primary"> Add Customer </button>
                </div>
            </form>
        </div>

    </div><!--container-->
@endsection
