<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeSelection()
    {
        return $this->select('name' , 'description' , 'price' , 'img');
    }

    public function scopeSort()
    {
      return  $this->orderby('created_at' , 'DESC')->Language();

    }

    public function scopeLanguage($query)
    {
        return $query->where('language_id' , \auth()->user()->language_id);
    }
}
