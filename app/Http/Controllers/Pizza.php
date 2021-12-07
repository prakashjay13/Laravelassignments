<?php

namespace App\Http\Controllers;
use App\Models\Menu;
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
            'address' => 'required',
            'mobile' => 'required',
        ], [
            'name.required' => "This field is mandatory",
            'email.required' => "This field is mandatory",
            'password.required' => "This field is mandatory",
            'address.required' => "This field is mandatory",
            'mobile.required' => "This field is mandatory",
        ]);
        if ($validation) {
            $email = $req->email;
            $password = Hash::make($req->password);
            $name = $req->name;
            $address = $req->address;
            $mobile = $req->mobile;
                $customer = new Customer();
                $customer->email = $email;
                $customer->password = $password;
                $customer->name = $name;
                $customer->address = $address;
                $customer->mobile = $mobile;
               
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
                    $req->session()->put("user", $customer);
                    return redirect('layout/dasboard');
                } else {
                    return back()->with('error', 'Login error');
                }
            }
        }
    }



































}




