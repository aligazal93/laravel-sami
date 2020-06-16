<?php

namespace App\Http\Controllers;
use App\Company;
use App\Customer;
//use Faker\Provider\hr_HR\Company;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list() {

        $activeCustomers= Customer::where('active' , 1)->get();
        $inactiveCustomers= Customer::where('active' , 0)->get();
        $companies = Company::all();

//        $customers = Customer::all();

//        dd($activeCustomers);

        return view('internals/customers' , compact('activeCustomers','inactiveCustomers','companies'));
    }

    public function store() {

//        dd(request('name'));
        $data = request()->validate([
           'name'=>'required|min:3',
            'email' => 'email:rfc,dns',
            'active'=>'required',
            'company_id'=>'required',
        ]);

        $customer = new Customer();
        $customer -> name = request('name');
        $customer -> email = request('email');
        $customer -> active = request('active');
        $customer -> company_id = request('company_id');
        $customer->save();
        return back();

    }


}
