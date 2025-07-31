<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;

class CategoryNav extends Component
{
    public $categories;
    public $active;

    public function __construct($active = null)
    {
        $this->categories = Category::all();
        $this->active = $active;
    }

    public function render()
    {
        return view('components.category-nav');
    }
}
