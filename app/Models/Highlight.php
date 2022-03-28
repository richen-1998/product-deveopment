<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    protected $fillable = ['title','video_url','description'];
    //use HasFactory;
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
