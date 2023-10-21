<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\File;
use App\Models\User;
use App\Services\Uploader\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\String\u;

class DocumentController extends Controller
{
    public function Document_show()
    {

        $categorys = Category::all();
        $users = User::all();
        return View('panel.admin.send_document', compact('categorys', 'users'));
    }

    public function Document_show_store(Request $request,Uploader $uploader)
    {

        //validate
        $request->validate([
            'file' => 'required|file|mimetypes:application/pdf,image/jpeg|max:2550',
            'category' => 'required',
            'user' => 'required'

        ], [
            'file.required' => 'وارد کردن فایل اجباری می باشد',
            'file.file' => 'فایل حتما باید از نوع فایل باشد',
            'file.mimetypes' => 'فایل باید از نوع pdf یا عکس باشد',
            'file.max' => 'فایل ارسالی نباید بیش تر از 2 مگابایت باشد',
            'category.required' => 'وارد کردن دسته بندی اجباری می باشد',
            'user.required' => 'انتخاب کردن کاربر اجباری می باشد',

        ]);


        //store


        $uploader->upload();
        return redirect()->back()->with('success','فایل با موفقیت بارگزاری شد');


        }

        public function show(File $file){

         return $file->download();


        }

        //back

}
