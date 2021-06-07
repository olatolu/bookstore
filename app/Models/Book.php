<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'publication_year'];

    protected $hidden = ['pivot'];

    public function authors(){
        return $this->belongsToMany('App\Models\Author');
    }
}
