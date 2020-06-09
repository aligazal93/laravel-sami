<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list() {

        $customers = Customer::all();

//        dd($customer);

//        return view('internals/customers' , [
//            'customers' => $customers,
//        ]);
        return view('internals/customers' , compact('customers'));
    }

    public function store() {

//        dd(request('name'));
        $data = request()->validate([
           'name'=>'required|min:3',
            'mail' => 'email:rfc,dns'
        ]);

        $customer = new Customer();
        $customer -> name = request('name');
        $customer->save();
        return back();

    }


}
