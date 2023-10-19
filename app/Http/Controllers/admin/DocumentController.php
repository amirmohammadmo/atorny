<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use function Symfony\Component\String\u;

class DocumentController extends Controller
{
    public function Document_show(){

        $categorys=Category::all();
        $users=User::all();
        return View('panel.admin.send_document',compact('categorys','users'));
    }
    public function Document_show_store(Request $request){

        //validate
        $request->validate([
            'file'=>'required|file|mimetypes:application/pdf,image/jpeg|max:2550',
            'category'=>'required',
            'user'=>'required'

        ],[
            'file.required'=>'وارد کردن فایل اجباری می باشد',
            'file.file'=>'فایل حتما باید از نوع فایل باشد',
            'file.mimetypes'=>'فایل باید از نوع pdf یا عکس باشد',
            'file.max'=>'فایل ارسالی نباید بیش تر از 2 مگابایت باشد',
            'category.required'=>'وارد کردن دسته بندی اجباری می باشد',
            'user.required'=>'انتخاب کردن کاربر اجباری می باشد',

        ]);


        //store

        $data=[
                    'user_id'=>$request->input('user'),
                    'Category_id'=>$request->input('category'),
                    'status'=>0
            ];
        $data['name']=$request->input('file');
        

        //back
    }
}
