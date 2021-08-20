<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;


    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }


}
