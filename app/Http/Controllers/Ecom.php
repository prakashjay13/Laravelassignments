<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class Ecom extends Controller
{
    //
    public function default(){
        return view("admin.front.home");
    }


    public function error(){
        return view("admin.front.error");
    }

    public function blog(){
        return view("admin.front.blog");
    }

    public function blogsingle(){
        return view("admin.front.blogsingle");
    }

    public function cart(){
        return view("admin.front.cart");
    }

    public function checkout(){
        return view("admin.front.checkout");
    }

    public function contactus(){
        return view("admin.front.contactus");
    }

    public function ulogin(){
        return view("admin.front.ulogin");
    }

    public function productdetails(){
        return view("admin.front.productdetails");
    }




    //////////////////////////////////////////////////////////////////////
    public function shop()
    {
        $catdata = Category::all();
        return view("admin.front.shop", ['catdata' => $catdata]);
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

}
