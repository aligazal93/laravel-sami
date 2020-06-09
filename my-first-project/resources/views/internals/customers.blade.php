@extends('layout')
@section('title' , 'Customer List')

@section('content')
      <div class="row">
            <div class="col-sm-12">
                  <h1>Customers List</h1>
            </div>

            <div class="col-sm-12">
                  <form action="customers" method="post">
                        @csrf
                        <div class="form-group">
                              <input type="text" name="name" placeholder="Customer Name" value="{{old('name')}}" class="input-group">
                              {{$errors->first('name')}}
                        </div>

                        <div class="form-group">
                              <input type="text" name="email" placeholder="Email Address" value="{{old('email')}}" class="input-group">
                              {{$errors->first('email')}}
                        </div>

                        <div class="input-group">
                              <button type="submit" class="btn btn-primary"> Add Customer </button>
                        </div>
                  </form>
            </div>

            <div class="col-sm-12">
                  <hr>
                  <ul>
                        @foreach($customers as $customer)
                              <li>{{$customer->name}} (<span class="text-muted">{{$customer->email}}</span> )</li>
                        @endforeach
                  </ul>
            </div>
      </div><!--container-->
@endsection
