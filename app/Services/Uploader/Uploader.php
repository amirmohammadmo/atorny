<?php

namespace App\Services\Uploader;

use App\Models\File;
use Illuminate\Http\Request;

class Uploader
{
    private $request;
    private $storageManager;
    private $file;

    public function __construct(Request $request, storageManager $storageManager)
    {
        $this->request = $request;
        $this->storageManager = $storageManager;
        $this->file=$request->file('file');

    }

    public function upload()
    {
       $this->putFileIntoStorage();
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
}
