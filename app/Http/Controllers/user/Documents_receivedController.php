<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Jobs\SendMail;
use App\Jobs\SendMaile;
use App\Models\category;
use App\Models\File;
use App\Models\File_user;
use App\Services\Uploader\Uploader;
use Illuminate\Http\Request;
use App\Mail;

class Documents_receivedController extends Controller
{
    public function one()
    {
        $file=File::where('user_id','=',1)->where('Category_id','=',1)->get();
        return View('panel.user.one',compact('file'));
    }

    public function two()
    {
        $file=File::where('user_id','=',1)->where('Category_id','=',2)->get();
        return View('panel.user.two',compact('file'));
    }

    public function three()
    {
        $file=File::where('user_id','=',1)->where('Category_id','=',3)->get();

        return View('panel.user.three',compact('file'));
    }

    public function four()
    {
        $file=File::where('user_id','=',1)->where('Category_id','=',4)->get();

        return View('panel.user.four',compact('file'));
    }

    public function five()


    { $file=File::where('user_id','=',1)->where('Category_id','=',5)->get();
        return View('panel.user.five',compact('file'));
    }

    public function six()
    {
        $file=File::where('user_id','=',1)->where('Category_id','=',6)->get();

        return View('panel.user.six',compact('file'));
    }

    public function seven()
    {
        $file=File::where('user_id','=',1)->where('Category_id','=',7)->get();

        return View('panel.user.seven',compact('file'));
    }

    public function eight()

    {
        $file_users=File_user::orderBy('created_at','Desc')->where('user_id','=',1)->get();
        //dd($file_users);
        return View('panel.user.eighte',compact('file_users'));
    }

    public function nine()
    {
        return View('panel.user.nine');
    }
    public function download(File $file){

        return $file->download();
    }

    public function downloadUserFile(File_user $file){

        return $file->download();
    }
    public function file_delete(File_user $file){

        $file->delete();
        return redirect()->back()->with('success','فایل با موفقیت حذف شد');
    }
    public function send_protest(Uploader $uploader,Request $request){
        $request->validate([
            'file' => 'required|file|mimetypes:application/pdf,image/jpeg,audio/mpeg,audio/3gpp,audio/wav|max:9550',
            'type'=>'required'

        ], [
            'file.required' => 'وارد کردن فایل اجباری می باشد',
            'file.file' => 'فایل حتما باید از نوع فایل باشد',
            'file.mimetypes' => 'فایل باید از نوع pdf یا عکس باشد',
            'file.max' => 'فایل ارسالی نباید بیش تر از 2 مگابایت باشد',
            'type.required' => 'وارد کردن فایل اجباری می باشد',

        ]);

        $uploader->UploadUserFile();
        SendMail::dispatch('admin@gmail.com',new Mail\SendFileFromUser());
        return redirect()->back()->with('success','فایل با موفقیت بارگزاری شد');

    }
    public function Attorney_contract(){
        $file=File::where('user_id','=',1)->where('Category_id','=',8)->get();
        return View('panel.user.Attorney_contract',compact('file'));

        }
}
