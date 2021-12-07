<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class Pizza extends Controller
{
    //

    public function dashboard()
    {
        return view("dashboard");
    }

    public function register()
    {
        return view("register");
    }

    public function login()
    {
        return view("login");
    }

    public function menu()
    {
        return view("menu");
    }
    public function checkout()
    {
        return view("checkout");
    }

    public function logout()
    {
        return view('login');
    }



    public function usersignup(Request $req)
    {
        $validation = $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
        ], [
            'name.required' => "This field is mandatory",
            'email.required' => "This field is mandatory",
            'password.required' => "This field is mandatory",
            'phone.required' => "This field is mandatory",
        ]);
        if ($validation) {
            $email = $req->email;
            $password = Hash::make($req->password);
            $name = $req->name;
            $phone = $req->phone;
                $customer = new Customer();
                $customer->email = $email;
                $customer->password = $password;
                $customer->name = $name;
                $customer->phone = $phone;
               
                if ($customer->save()) {
                    return redirect('/login');
                } else {
                    return back()->with('error', 'Registration Error');
                }
             
        }
    }




    //for user login
    public function userlogin(Request $req)
    {
        $validation = $req->validate([

            'email' => 'required',
            'password' => 'required'
        ], [

            'email.required' => "This field is mandatory",
            'password.required' => "This field is mandatory",

        ]);
        if ($validation) {
            $email = $req->email;
            $password = $req->password;
            $customer = Customer::where('email', '=', $email)->first();
            if (!$customer) {
                return back()->with('error', "User doesn't exist");
            } else {
                if (Hash::check($password, $customer->password)) {
                    $req->session()->put("sid", $customer);
                    return view("dashboard");
                } else {
                    return back()->with('error', 'Login error');
                }
            }
        }
    }



































}




