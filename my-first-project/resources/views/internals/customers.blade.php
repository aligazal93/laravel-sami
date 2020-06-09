@extends('layout')

@section('content')
      <h1>Customers</h1>

      <form action="customers" method="post" class='pb-3'">
            @csrf
            {{$errors->first('name')}}
            <div class="input-group">
                  <input type="text" name="name" class="mb-2" placeholder="Customer Name">
            </div>
      {{$errors->first('mail')}}
      <div class="input-group">
                  <input type="text" name="mail" class="mb-2" placeholder="Email Address">
            </div>

            <div class="input-group">
                  <button type="submit"> Add Customer </button>
            </div>
      </form>

      <ul>
            @foreach($customers as $customer)
                  <li>{{$customer->name}}</li>
            @endforeach
      </ul>
@endsection
