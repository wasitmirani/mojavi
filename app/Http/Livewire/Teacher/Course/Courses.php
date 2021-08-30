<?php

namespace App\Http\Livewire\Teacher\Course;

use App\Models\Course;
use Livewire\Component;
use App\Models\Category;

class Courses extends Component
{
    public $openFormModal = false;



    public $name= '';
    public $category = "";
    public $price = "";
    public $image = "";
    public $description = "";






    public function render()
    {
        $categories = Category::all();
        return view('livewire.teacher.course.courses',['categories'=>$categories]);
    }

    public function resetFields(){
        $this->name = "";
        $this->category = "";
        $this->price = "";
        $this->description = "";
    }


    public function addCourse(){
      
         $course = new Course;

         $course->name = $this->name;
         $course->category = $this->category;
         $course->price = $this->price;
        $course->description = $this->description;

        $created = $course->save();
        $this->resetFields();






    }
}
