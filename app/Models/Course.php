<?php

namespace App\Models;

use App\Models\Teacher;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Course extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function teachers(){
        return $this->belongstoMany(Teacher::class);
    }
}
