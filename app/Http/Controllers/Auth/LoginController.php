<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kullanici;
use Session;
use Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Models;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = kullanici::where(['kullanici_takmaAd'=>$request->username])->first();

        if(!$user || !($request->password==$user->kullanici_sifre))
        {
            return $user;
        }
        else if($user->kullanici_hesapDurumu==false){
            return 'Hesabınız Donmuş';
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }

    }
}
