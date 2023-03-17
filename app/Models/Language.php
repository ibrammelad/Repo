<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable =["title" , 'slogan' , 'img','created_at'];

    public function scopeSelection()
    {
        return $this->select('title' , 'slogan' ,'img' , 'created_at');
    }
}
