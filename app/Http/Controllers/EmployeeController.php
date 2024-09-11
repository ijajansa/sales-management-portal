<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees = User::where('role_id',2)->paginate(10);
        return view('employees.all',compact('employees'));
    }
}
