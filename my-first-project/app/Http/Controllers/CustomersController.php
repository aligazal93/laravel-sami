<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list() {

        $activeCustomers= Customer::where('active' , 1)->get();
        $inactiveCustomers= Customer::where('active' , 0)->get();


        $customers = Customer::all();

//        dd($activeCustomers);

        return view('internals/customers' , compact('activeCustomers','inactiveCustomers'));
    }

    public function store() {

//        dd(request('name'));
        $data = request()->validate([
           'name'=>'required|min:3',
            'email' => 'email:rfc,dns',
            'active'=>'required'
        ]);

        $customer = new Customer();
        $customer -> name = request('name');
        $customer -> email = request('email');
        $customer -> active = request('active');
        $customer->save();
        return back();

    }


}
