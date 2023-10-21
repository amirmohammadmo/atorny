<?php

namespace App\Services\Uploader;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class storageManager
{

    public function putFile(string $name,uploadedFile $file)
    {
        return Storage::disk('public')->putFileAs('file',$file,$name);
    }
    public function getFile(string $name){

        return  Storage::disk('public')->download('file/'.$name);
        //  redirect()->back();

    }


}
