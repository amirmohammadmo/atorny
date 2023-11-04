<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::orderBy('created_at','Desc')->Where('role','=',2)->get();

        return View('panel.admin.users_management',compact('users'));

    }
    public function UserEdit(User $id){
 return View('panel.admin.user_edit',compact('id'));

    }
    public function UserEditStore(User $id,Request $request){


        if (!empty($request->input('password')))
        {
            $request->validate([
                'name'=>'required|string|max:255',
                'phone'=>'required|numeric',
                'National_Code'=>'required|numeric',
                'email'=>'required|email|max:255',
                'password'=>'required|confirmed|min:8',

            ],[
                'name.required'=>'فیلد نام اجباری میباشد',
                'name.string'=>'در فیلد نام نمیتوانید عدد وارد نمایید',
                'phone.required'=>'وارد کردن فیلد موبایل اجباری می باشد',
                'phone.numeric'=>'در فیلد موبایل فقط عدد می توانید وارد نمایید',
                'phone.max'=>'در فیلد موبایل فقط 11رقم می توانید وارد نمایید',
                'National_Code.required'=>'وارد کردن کد ملی اجباری می باشد',
                'National_Code.numeric'=>'فیلد کد ملی فقط باید عدد وارد شود',
                'email.required'=>'وارد کردن فیلد ایمیل اجباری می باشد',
                'email.email'=>'فیلد ایمیل فقط با قالب ایمیل وارد شود',
                'password.required'=>'فیلد پسورد اجباری میباشد',
                'password.confirmed'=>'رمز وارد شده با هم همخوانی ندارد',
                'password.min'=>'رمز وارد شده نمی تواند کمتر از 8 کارکتر باشد',
            ]);
            $data=[
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'phone'=>$request->input('phone'),
                'National_Code'=>$request->input('National_Code'),
                'password'=>encrypt($request->input('password')),
            ];
            $id->update($data);
            return redirect()->route('admin.user.show')->with('success','کاربر مورد نظر با موفقیت ویرایش شد');
        }else
        {
            $request->validate([
                'name'=>'required|string|max:255',
                'phone'=>'required|numeric',
                'National_Code'=>'required|numeric',
                'email'=>'required|email|max:255',


            ],[
                'name.required'=>'فیلد نام اجباری میباشد',
                'name.string'=>'در فیلد نام نمیتوانید عدد وارد نمایید',
                'phone.required'=>'وارد کردن فیلد موبایل اجباری می باشد',
                'phone.numeric'=>'در فیلد موبایل فقط عدد می توانید وارد نمایید',
                'phone.max'=>'در فیلد موبایل فقط 11رقم می توانید وارد نمایید',
                'National_Code.required'=>'وارد کردن کد ملی اجباری می باشد',
                'National_Code.numeric'=>'فیلد کد ملی فقط باید عدد وارد شود',
                'email.required'=>'وارد کردن فیلد ایمیل اجباری می باشد',
                'email.email'=>'فیلد ایمیل فقط با قالب ایمیل وارد شود',
            ]);
            $data=[
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'phone'=>$request->input('phone'),
                'National_Code'=>$request->input('National_Code'),

            ];
            $id->update($data);
            return redirect()->route('admin.user.show')->with('success','کاربر مورد نظر با موفقیت ویرایش شد');
        }
    }
}
