<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index(){
        $employees = User::where('role_id',2)->paginate(10);
        return view('employees.all',compact('employees'));
    }
    public function create()
    {
        return view('employees.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:8',
        ]);
        $data = $request->all();
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 2;
        $user->save();
        return redirect('employees')->with('success','Employee created successfully');
    }
}
