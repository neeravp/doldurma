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



        //Scenario when associating parent categories as well as subCategories with user via category_user pivot table
        return $this->categories;

        /*--------------------------------------------------OR--------------------------------------------------*/
        //Scenario when you are only associating the parent categories with the user via category_user pivot table
        //i.e. associating all categories where the parent_id is null

        return $this->categories()->with('subCategories')->get();
    }

    public function availableCategoriesFlattened()
    {      
        if($this->roles->contains('label', 'is-portal-manager')) {
            return Category::all();
        }


        $subCategories = $this->categories()->with('subCategories')->get()->pluck('subCategories')->flatten();

        return $this->categories->concat($subCategories);

        //Scenario when associating parent categories as well as subCategories with user via category_user pivot table
        return $this->categories;

        /*--------------------------------------------------OR--------------------------------------------------*/
        //Scenario when you are only associating the parent categories with the user via category_user pivot table
        //i.e. associating all categories where the parent_id is null
        //Piping the output through unique() will take care of either situations
        //So if you want to keep the option of associating only parent categories with user open for future
        //can still use this part of code with unique() tacked at the end
        $subCategories = $this->categories()->with('subCategories')->get()->pluck('subCategories')->flatten();

        return $this->categories->concat($subCategories)->unique();


    }
}