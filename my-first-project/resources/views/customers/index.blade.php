@extends('layout')
@section('title' , 'Customer List')

@section('content')
      <div class="row">

            @foreach($customers as $customer)
                  <div class="col-sm-2">
                        {{$customer -> id}}
                  </div>

                  <div class="col-sm-4">
                        {{$customer -> name}}
                  </div>

                  <div class="col-sm-4">
                        {{$customer -> company -> name}}
                  </div>

                  <div class="col-sm-2">
                        {{$customer -> active ? 'Active' : 'inActive' }}
                  </div>


            @endforeach


      </div><!--container-->
@endsection
