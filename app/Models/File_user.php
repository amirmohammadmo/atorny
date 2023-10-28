<?php

namespace App\Models;

use App\Services\Uploader\storageManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File_user extends Model
{
    protected $table='file_user';
    protected $guarded=['id'];
    public function user(){
        return $this->belongsToMany(User::class,'user_file','file_id','user_id');
    }
    public function download(){
        //  dd($this->name);
        return resolve(storageManager::class)->getFile($this->name);
    }
    public function delete()
    {
        resolve(storageManager::class)->deleteFile($this->name);
        parent::delete();
    }

    use HasFactory;
}
