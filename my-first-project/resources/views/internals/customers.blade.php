@extends('layout')
@section('content')

      <h1>Customers</h1>
      <form action="customers" method="post" class='pb-3'">
            @csrf
            <div class="input-group">
                  <input type="text" name="name" class="mb-2" placeholder="Customer Name" value="{{old('name')}}">
                  {{$errors->first('name')}}
            </div>

            <div class="input-group">
                  <input type="text" name="email" class="mb-2" placeholder="Email Address" value="{{old('email')}}">
                  {{$errors->first('email')}}
            </div>

            <div class="input-group">
                  <button type="submit"> Add Customer </button>
            </div>

      </form>

      <ul>
            @foreach($customers as $customer)
                  <li>{{$customer->name}} (<span class="text-muted">{{$customer->email}}</span> )</li>
            @endforeach
      </ul>

@endsection
