<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employees extends Controller
{
    public function employeeList() {
        return view('layouts.employees');
    }
}
