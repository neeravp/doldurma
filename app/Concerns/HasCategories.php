<?php

namespace App\Concerns;

use App\Models\Category;

trait HasCategories
{
    public function availableCategories()
    {        
        if($this->roles->contains('label', 'is-portal-manager')) {
            return Category::all();
        }

        return $this->categories()->with('subCategories')->get();
    }

    public function availableCategoriesFlattened()
    {      
        if($this->roles->contains('label', 'is-portal-manager')) {
            return Category::all();
        }

        $subCategories = $this->categories()->with('subCategories')->get()->pluck('subCategories')->flatten();

        return $this->categories->concat($subCategories);

    }
}