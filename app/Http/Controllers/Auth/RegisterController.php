<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\kullanici;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\User;
use Hash;

class RegisterController extends Controller
{
    public function register(Request $data)
    {
        return view('index');
    }

    public function storeUser(Request $request)
    {
        $data = $request;
        try {
            $kullanici = new kullanici;
            $kullanici->kullanici_isim = $data->firstName;
            $kullanici->kullanici_soyisim = $data->lastName;
            $kullanici->kullanici_takmaAd = $data->username;
            $kullanici->kullanici_mail = $data->email;
            $kullanici->kullanici_adres = $data->fullAddress;
            $kullanici->kullanici_telNo = $data->phoneNumber;
            $kullanici->kullanici_sifre = $data->password;
            $kullanici->save();
        }
        catch(Exception $e) {return redirect('index')->with('failed',"operation failed");}

        return redirect('/');
    }
}
