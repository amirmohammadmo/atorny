<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function register(){
        return View('auth.register');
    }
    public function register_store(Request $request){

       //validation
        $request->validate([
            'name'=>'required|string|max:255',
            'phone'=>'required|numeric|unique:users',
            'National_Code'=>'required|numeric|unique:users',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|confirmed|min:8',

        ],[
            'name.required'=>'فیلد نام اجباری میباشد',
            'name.string'=>'در فیلد نام نمیتوانید عدد وارد نمایید',
            'phone.required'=>'وارد کردن فیلد موبایل اجباری می باشد',
            'phone.numeric'=>'در فیلد موبایل فقط عدد می توانید وارد نمایید',
            'phone.max'=>'در فیلد موبایل فقط 11رقم می توانید وارد نمایید',
            'phone.unique'=>'کاربر با این مشخصات در سیستم وجود دارد',
            'National_Code.required'=>'وارد کردن کد ملی اجباری می باشد',
            'National_Code.numeric'=>'فیلد کد ملی فقط باید عدد وارد شود',
            'National_Code.unique'=>'کاربر با این مشخصات در سیستم وجود دارد',
            'email.required'=>'وارد کردن فیلد ایمیل اجباری می باشد',
            'email.email'=>'فیلد ایمیل فقط با قالب ایمیل وارد شود',
            'email.unique'=>'کاربر با این مشخصات در سیستم وجود دارد',
            'password.required'=>'فیلد پسورد اجباری میباشد',
            'password.confirmed'=>'رمز وارد شده با هم همخوانی ندارد',
            'password.min'=>'رمز وارد شده نمی تواند کمتر از 8 کارکتر باشد',
        ]);
            //store data

        $register=User::create(
            [
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'phone'=>$request->input('phone'),
                'National_Code'=>$request->input('National_Code'),
                'role'=>2,
                'password'=>encrypt($request->input('National_Code')),
            ]

        );
        //login
        if ($register){
            Auth::login($register);
            return redirect()->route('user.dashboard');
        }


    }
    public function logout(){
        Auth::logout();
        //return redirect()->route();
    }
}
