@extends('layout')

@section('content')
      <h1>Customers</h1>

      <form action="customers" method="post" class='pb-3'">
            @csrf
            <div class="input-group">
                  <input type="text" name="name" class="mb-2">
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
