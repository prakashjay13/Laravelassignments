<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class main extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }

    public function home()
    {
        return view('admin.master');
    }

    public function category()
    {
        return view('admin.pages.category');
    }

    public function product()
    {
        return view('admin.pages.product');
    }

    public function order()
    {
        return view('admin.pages.order');
    }

    public function logout()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view("admin.dashboard");
    }

    public function cpass(){
        return view("admin.changepass");
    }

    public function edit(){
        return view("admin.editdetails");
    }

    public function update(Request $req){
        $user=session('sid');
        $uid=$user->id;
        $email = $req->email;
            $name = $req->name;
            $phone = $req->phone;
            $gender = $req->gender;
            $age = $req->age;
            $city = $req->city;
            Admin::where('id', $uid)->update(['name' => $name,'email'=>$email,'age'=>$age,'phone'=>$phone,'city'=>$city,'gender'=>$gender]);
            return back()->with('success', 'Details Changed Successfully !!');

    }

    public function store(Request $req){
        $user=session('sid');
        $uid=$user->id;
    //changepassword 
    //user,database
            if(Hash::check($req->oldpass,$user->password)){
                $new = Hash::make($req->newpass);
                Admin::where('id', $uid)->update(['password' => $new]);
                return back()->with('success', 'Password Changed Successfully !!');
            }
            else{
                return back()->with('error', 'Incorrect Password');
            }
        }
    


    public function sendposts(Request $req)
    {
        $validation = $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'file'=>'required',
        ], [
            'name.required' => "This field is mandatory",
            'email.required' => "This field is mandatory",
            'password.required' => "This field is mandatory",
            'city.required' => "This field is mandatory",
            'phone.required' => "This field is mandatory",
            'age.required' => "This field is mandatory",
            'gender.required' => "This field is mandatory",
            'file.required' => "This field is mandatory",
        ]);
        if ($validation) {
            $email = $req->email;
            $password=Hash::make( $req->password);
            $name = $req->name;
            $phone = $req->phone;
            $gender = $req->gender;
            $age = $req->age;
            $city = $req->city;
            $file = $req->file('file');
            $dest = public_path('/uploads');
            $fname = "Image-" . rand() . "-" . time() . "." . $file->extension();
            if ($file->move($dest, $fname)) {
                $admin = new Admin();
                $admin->email = $email;
                $admin->password = $password;
                $admin->name = $name;
                $admin->phone = $phone;
                $admin->gender = $gender;
                $admin->city = $city;
                $admin->age = $age;
                $admin->image = $fname;
                if ($admin->save()) {
                    return redirect('/login');
                } else {
                    $path = public_path() . "uploads/" . $fname;
                    unlink($path);
                    return back()->with('error', 'Registration Error');
                }
            } else {
               
                return back()->with('error', 'Uploading Error');
             }
        }
    }

    

 

    public function view(Request $req)
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
            $user = Admin::where('email', '=', $email)->first();
            if (!$user) {
                return back()->with('error', "User doesn't exist");
            } else {
                if(Hash::check($password,$user->password)) {
                    $req->session()->put("sid", $user);
                    return view('admin.dashboard');
                } else {
                    return back()->with('error', 'Login error');
                }
            }
        }
    }

}
