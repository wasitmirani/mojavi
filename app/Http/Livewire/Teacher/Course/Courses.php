<?php

namespace App\Http\Livewire\Teacher\Course;

use App\Models\Course;
use Livewire\Component;

class Courses extends Component
{
    public $openFormModal = false;



    public $name= '';
    public $category = "";
    public $price = "";
    public $image = "";
    public $description = "";

    
    public function showModal(){
    
        return $this->openFormModal = true;
    }


    public function closeModal(){
        return $this->openFormModal = false;
    }
 

    public function render()
    {
        return view('livewire.teacher.course.courses');
    }


    public function addCourse(){
     
         $course = new Course;
      
         $course->name = $this->name;
         $course->category = $this->category;
         $course->price = $this->price;
        $course->description = $this->description;

        $created = $course->save();

        if($created){



        }

    }
}
