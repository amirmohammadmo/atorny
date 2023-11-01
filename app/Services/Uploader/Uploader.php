<?php

namespace App\Services\Uploader;

use App\Jobs\SendMail;
use App\Mail\appMailaddFileFromAdmin;
use App\Mail\SendFileFromUser;
use App\Models\File;
use App\Models\File_user;
use App\Models\Process;
use App\Models\User;
use App\Services\Notification\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Uploader
{
    private $jobMail;
    private $request;
    private $storageManager;
    private $file;
    private $userEmail;
    private $mailfile;


    public function __construct(Request $request, storageManager $storageManager,User $userEmail)
    {
        $this->request = $request;
        $this->storageManager = $storageManager;
        $this->file=$request->file('file');
//        $this->jobMail=$jobMail;
       $this->userEmail=$userEmail;


    }

    public function upload()
    {
       $this->putFileIntoStorage();
       SendMail::dispatch($this->userEmail::find($this->request->input('user'))->email,new appMailaddFileFromAdmin());
      return $this->saveFileIntoDatabase();

    }
    private function saveFileIntoDatabase()
    {
        $file = new File([
            'user_id' => $this->request->input('user'),
            'Category_id' => $this->request->input('category'),
            'name'=>$this->file->getClientOriginalName(),
            'status' => 0

        ]);
        $file->save();

    }
    public function putFileIntoStorage(){
        $this->storageManager->putFile($this->file->getClientOriginalName(),$this->file);
    }


    //user upload

    public  function putFileIntoStorageUser(){
        $this->storageManager->putFileUser($this->file->getClientOriginalName(),$this->file);
    }
    private function saveFileIntoDatabaseForUser()
    {
        $file = new File_user([
            'user_id' => 1,
            'type' => $this->request->input('type'),
            'name'=>$this->file->getClientOriginalName(),
            'status' => 0

        ]);
        $file->save();

    }
    public function UploadUserFile(){
        $this->putFileIntoStorageUser();
        return $this->saveFileIntoDatabaseForUser();
    }

    public function SaveFileIntoStorageProcess(){
        $this->storageManager->putFileUser($this->file->getClientOriginalName(),$this->file);

    }
    public function saveFileIntoDatabaseForProcess(){
        $file = new Process([
            'user_id' => $this->request->input('user'),
            'name' => $this->file->getClientOriginalName(),
            'Description'=>$this->request->input('message'),
        ]);
        $file->save();
    }
    public function UploadProcess(){
        $this->saveFileIntoDatabaseForProcess();
        $this->SaveFileIntoStorageProcess();
    }
}
