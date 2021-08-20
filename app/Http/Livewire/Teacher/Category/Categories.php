<?php

namespace App\Http\Livewire\Teacher\Category;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public function render()
    {
        $categories = Category::paginate(10);
        return view('livewire.teacher.category.categories',['categories'=>$categories]);
    }
}
