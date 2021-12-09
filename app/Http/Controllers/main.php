<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
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

    public function cpass()
    {
        return view("admin.changepass");
    }

    public function edit()
    {
        return view("admin.editdetails");
    }



    //for adding category------------------------------------------------------

    public function category()
    {
        $catdata = Category::all();
        return view("admin.category", ['catdata' => $catdata]);
    }

    public function addcategory()
    {
        return view("admin.addcategory");
    }

    public function postaddcategory(Request $req)
    {
        $validateData = $req->validate(
            [
                'name' => 'required|unique:categories',
                'description' => 'required|min:5|max:200',
                'file' => 'required|mimes:jpg,png,jpeg,JPG,JPEG,PNG,gif,GIF'
            ]
            );
    
        if ($validateData) {
            $cname = $req->name;
            $description = $req->description;
            $file = $req->file('file');
            $dest = public_path('/uploads');
            $fname = "Image-" . rand() . "-" . time() . "." . $file->extension();
            if ($file->move($dest, $fname)) {
                $cat = new Category();
                $cat->name = $cname;
                $cat->description = $description;
                $cat->image = $fname;
                if ($cat->save()) {
                    return redirect("/category");
                } else {
                    $path = public_path() . "uploads/" . $fname;
                    unlink($path);
                    return back()->with('error', 'Category not added');
                }
            } else {
                return back()->with('error', 'Uploading error');
            }
        }
    }


    public function delcategory(Request $req){
        $catdata=Category::where('id',$req->cid)->first();
        $imagePath=public_path().'/uploads/'.$catdata->image;
        $cat=Category::find($req->cid);
        if($cat->delete()){
            unlink($imagePath);
            return "Category Deleted";
        }
        else{
            return "Category Not Deleted";
        }
    }
    public function editcategory($id)
    {
        $catdata=Category::where('id',$id)->first();
        return view("admin.editcategory",['catdata'=>$catdata]);
    }
    public function updatecategory(Request $req){
        $id=$req->id;
        $cname = $req->name;
            $description = $req->description;
            Category::where('id',$id)->update(["name"=>$cname,"description"=>$description]);
            return redirect("/category");
        
    }


    
//for products-------------------------------------------------
    public function product()
    {
        $prodata = Product::all();
        return view("admin.product", ['prodata' => $prodata]);
    }

    public function addproduct()
    {
        return view("admin.addproduct");
    }

    public function postaddproduct(Request $req)
    {
        $validateData = $req->validate(
            [
                'cid' => 'required',
                'pname' => 'required|unique:products',
                'price' => 'required',
                'quantity'=>'required',
                'features'=>'required',
                'file' => 'required|mimes:jpg,png,jpeg,JPG,JPEG,PNG,gif,GIF'
            ]
            );
    
        if ($validateData) {
            $cid = $req->cid;
            $pname = $req->pname;
            $price = $req->price;
            $quantity = $req->quantity;
            $features = $req->features;
            $file = $req->file('file');
            $dest = public_path('/uploads');
            $fname = "Image-" . rand() . "-" . time() . "." . $file->extension();
            if ($file->move($dest, $fname)) {
                $prod = new Product();
                $prod->cid = $cid;
                $prod->pname = $pname;
                $prod->price = $price;
                $prod->quantity = $quantity;
                $prod->features = $features;
                $prod->image = $fname;
                if ($prod->save()) {
                    return redirect("/product");
                } else {
                    $path = public_path() . "uploads/" . $fname;
                    unlink($path);
                    return back()->with('error', 'Product not added');
                }
            } else {
                return back()->with('error', 'Uploading error');
            }
        }
    }


    public function delproduct(Request $req){
        $prodata=Product::where('cid',$req->cid)->first();
        $imagePath=public_path().'/uploads/'.$prodata->image;
        $cat=Product::find($req->cid);
        if($cat->delete()){
            unlink($imagePath);
            return "Product Deleted";
        }
        else{
            return "Product Not Deleted";
        }
    }
    public function editproduct($cid)
    {
        $prodata=Product::where('cid',$cid)->first();
        return view("admin.editproduct",['prodata'=>$prodata]);
    }
    public function updateproduct(Request $req){
        $cid = $req->cid;
         $pname = $req->pname;
         $quantity =$req->quantity;
         $features =$req ->features;
         $price = $req->price;
            Product::where('cid',$cid)->update(["cid"=>$cid,"pname"=>$pname,"price"=>$price,"quantity"=>$quantity,"features"=>$features]);
            return redirect("/product");
        
    }



    //for updating the user entered details
    public function update(Request $req)
    {
        $user = session('sid');
        $uid = $user->id;
        $email = $req->email;
        $name = $req->name;
        $phone = $req->phone;
        $gender = $req->gender;
        $age = $req->age;
        $city = $req->city;
        Admin::where('id', $uid)->update(['name' => $name, 'email' => $email, 'age' => $age, 'phone' => $phone, 'city' => $city, 'gender' => $gender]);
        return back()->with('success', 'Details Changed Successfully !!');
    }

    public function store(Request $req)
    {
        $user = session('sid');
        $uid = $user->id;
        //changepassword 
        //user,database
        if (Hash::check($req->oldpass, $user->password)) {
            $new = Hash::make($req->newpass);
            Admin::where('id', $uid)->update(['password' => $new]);
            return back()->with('success', 'Password Changed Successfully !!');
        } else {
            return back()->with('error', 'Incorrect Password');
        }
    }


    //for user registration
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
            'file' => 'required|mimes:jpg,png,jpeg,PNG,JPEG,JPEG,gif',
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
            $password = Hash::make($req->password);
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




    //for user login
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
                if (Hash::check($password, $user->password)) {
                    $req->session()->put("sid", $user);
                    return view('admin.dashboard');
                } else {
                    return back()->with('error', 'Login error');
                }
            }
        }
    }
}
