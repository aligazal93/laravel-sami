<?php

namespace App\Http\Controllers;
use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers/index' , compact('customers'));
    }

    public function create()
    {
        $companies = Company::all();
        return view('customers/create', compact('companies'));
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
        return redirect('customers');

    }


}
