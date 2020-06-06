<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list() {
        $customers = [
            "Ahmed sami",
            'Ali Ghazal',
            'Amr Diab',
            'Ahmed Lotfy',
        ];
        return view('internals/customers' , [
            'customers' => $customers,
        ]);
    }
}
