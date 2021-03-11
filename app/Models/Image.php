<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
     'id',
        'user_id',
        'image_path',


    ];
    public function user(){
        return $this->belongsTo(User::class);
        }
        public function profile(){
            return $this->belongsTo(Profile::class);
}
}
