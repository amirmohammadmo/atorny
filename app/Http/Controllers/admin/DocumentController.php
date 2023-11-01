<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\File;
use App\Models\File_user;
use App\Models\Process;
use App\Models\User;
use App\Services\Uploader\storageManager;
use App\Services\Uploader\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
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
            'file' => 'required|file|mimetypes:application/pdf,image/jpeg|max:9550',
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
        public function Documents_received(){
        $file=File_user::all()->sortByDesc('created_at');
        $user=User::all();
        return View('panel.admin.Documents_received',compact('file','user'));
        }
        public function Documents_received_download(File_user $id){
       return $id->download();

        }
        public function Documents_users(){
        $users=User::all();
        return View('panel.admin.documents_user',compact('users'));
        }
        public function Documents_users_show($id){
        $document_send=File::where('user_id','=',$id)->get();
        $document_reseave=File_user::orderBy('created_at','Desc')->where('user_id','=',$id)->get();
        $process=Process::orderBy('created_at','Desc')->where('user_id','=',$id)->get();
        return View('panel.admin.document_show',compact('document_reseave','document_send','process'));
        }
        public function delete_user_sends_file(File_user $id){
        $id->delete();
        return redirect()->back()->with('success','فایل با موفقیت حذف شد');

        }
        public function delete_admin_sends_file(File $id){
        $id->delete();
        return redirect()->back()->with('success','فایل با موفقیت حذف شد');


        }

        //back

}
