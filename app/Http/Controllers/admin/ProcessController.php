<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Process;
use App\Models\User;
use App\Services\Uploader\Uploader;
use Illuminate\Http\Request;


class ProcessController extends Controller
{
    public function index(){
        $users=User::all();
        return View('panel.admin.process',compact('users'));
    }
    public function process_store(Request $request,Uploader $uploader){
       $uploader->UploadProcess();
       return redirect()->back()->with('success','عملیات با موفقیت انجلم شد');

    }
    public function download(Process $process){
       return $process->download();

    }
}
