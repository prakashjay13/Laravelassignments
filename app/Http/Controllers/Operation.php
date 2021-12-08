<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class Operation extends Controller
{
    public function index()
    {
        $products = Menu::all();
        return view('layout.dasboard', compact('products'));
    }

    public function cart()
    {
        return view('layout.cart');
    }

    public function addToCart($id)
    {
        $product = Menu::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function checkOut($total){
        $val=$total;
        return view('layout.checkout',['total'=>$val]);
    }

    public function PostOrder(Request $req){
        $validate = $req->validate([
            'ccdetail' => "required|min:16"
        ]);
        if($validate){
            $customer=session('user');
            $cid=$customer->id;
            $product=session()->get('cart', []);
            foreach($product as $key=>$k){
                $order = new Order();
                $id = $key;
                $order->cid=$cid;
                $order->pid="$id";
                $order->total=$req->total;
                $order->ccdetails=$req->ccdetail;
                $order->save();
            }
            $req->session()->forget('cart');
            // for sending mail

    $data=['name'=>"Dexter",'data'=>"Hello Dexter"];
    $user['to']='dextermorgan8879@gmail.com';
    Mail::send('mail',$data,function($messages) use ($user){
        $messages->to($user['to']);
        $messages->subject('Hello Dexter');
    });
            return view('layout.success'); 
        }
    }

    public function myOrder(){
        $user=session('user');
        $uid=$user->id;
        $order=Order::where('cid',$uid)->first();
        $orderpid=$order->pid;
        $product= Menu::where('id',$orderpid)->first();
        return view('layout.myorder',['order'=>$order,'product'=>$product]);
    }
}
