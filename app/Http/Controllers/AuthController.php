<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use Illuminate\Http\Request;

class AuthController extends Controller
{
public function index (){
    return view('register');
}
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:customers',
        'phone' => 'nullable|string',
        'address' => 'required|string|max:255',
        'gender' => 'required|in:Male,Female',
        'password' => 'required|string|min:8|confirmed',
        ]);

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->gender = $request->gender;
        $customer->password = Hash::make($request->password); // Hash the password
        $customer->save();
        return redirect()->back()->with('message', 'Registration successful!');

}



}
