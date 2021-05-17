<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AddToCart extends Controller
{
    function add_to_cart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new cart;
            $cart->fk_kullanici_id=$req->session()->get('user')['kullanici_id'];
            $cart->fk_urun_id=$req->product_id;
            $cart->sepet_urunFiyat=$req->priceTag;
            $cart->save();
            return redirect('cart');
        }
        else
        {
            return redirect('/');
        }

    }

    function cartlist()
    {
        if(Session::has('user')){
            $userId = Session::get('user')['kullanici_id'];
            $products = DB::table('sepet')
                ->join('urun','sepet.fk_urun_id','=','urun.urun_id')
                ->where('sepet.fk_kullanici_id',$userId)
                ->select('urun.*','sepet.sepet_id as cart_id')
                ->get();

            return view('cart',['products' => $products]);
        }
        else{
            return "Lütfen giriş yapın!";
        }

    }

    function RemoveFromCart($id)
    {
        cart::destroy($id);
        return redirect('cart');
    }
}
