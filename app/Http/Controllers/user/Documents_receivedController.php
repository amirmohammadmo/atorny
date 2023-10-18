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
        return View('panel.user.two');
    }

    public function three()
    {
        return View('panel.user.three');
    }

    public function four()
    {
        return View('panel.user.four');
    }

    public function five()
    {
        return View('panel.user.five');
    }

    public function six()
    {
        return View('panel.user.six');
    }

    public function seven()
    {
        return View('panel.user.seven');
    }

    public function eight()
    {
        return View('panel.user.eighte');
    }

    public function nine()
    {
        return View('panel.user.nine');
    }
}
