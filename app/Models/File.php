<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table='file';
    protected $guarded=['id'];

    public function category(){
        return $this->belongsTo(Category::class,'Category_id');
    }
    public function user(){
        return $this->belongsToMany(User::class,'user_file','file_id','user_id');
    }
    use HasFactory;
}
