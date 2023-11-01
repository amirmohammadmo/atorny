<?php

namespace App\Models;

use App\Services\Uploader\storageManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $table='process';
    protected $guarded=['id'];

    public function user(){
        $this->belongsTo(User::class,'user_id');
    }
    public function download(){

        return resolve(storageManager::class)->getFile($this->name);
    }
    use HasFactory;
}
