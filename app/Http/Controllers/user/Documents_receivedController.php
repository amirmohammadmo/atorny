<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\File;
use Illuminate\Http\Request;

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
        return View('panel.user.eighte');
    }

    public function nine()
    {
        return View('panel.user.nine');
    }
public function download(File $file){

        return $file->download();
}
}
