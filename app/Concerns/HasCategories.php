<?php

namespace App\Concerns;

use App\Models\Category;

trait HasCategories
{
    /**
     * For your use case where you are associating parent categories as well as subCategories
     * with user via the category_user table, except for the Portal Manager you can just
     * return $this->categories for all other users - just use availableCategories()
     * No need to use availableCategoriesFlattened() for your particular use case
     * since even childrenCategories/subCategories are being associated with the
     * user via the pivot table so no need to eager load subCategories relation.
     * 
     * If you would have been associating only the parent categories with the user via category_user pivot table
     * and had all the subCategories of the associated parent Categories (where parent_id is null) automatically
     * get available to the user then you can use the or parts in both methods availableCategories and 
     * availableCategoriesFlattened.
     */

    public function availableCategories()
    {        
        if($this->roles->contains('label', 'is-portal-manager')) {
            return Category::all();
        }



        //Scenario when associating parent categories as well as subCategories with user via category_user pivot table
        return $this->categories;

        /*--------------------------------------------------OR--------------------------------------------------*/
        /**
         * Scenario when you are only associating the parent categories with the user via category_user pivot table
         * i.e. associating all categories where the parent_id is null
         */

        //return $this->categories()->with('subCategories')->get();
    }

    public function availableCategoriesFlattened()
    {      
        if($this->roles->contains('label', 'is-portal-manager')) {
            return Category::all();
        }

        /** 
         * Scenario when associating parent categories as well as subCategories with user via category_user pivot table
         */
        return $this->categories;

        /*--------------------------------------------------OR--------------------------------------------------*/
        /**
         * Scenario when you are only associating the parent categories with the user via category_user pivot table
         * i.e. associating all categories where the parent_id is null
         * Piping the output through unique() will take care of either situations
         * So if you want to keep the option of associating only parent categories with user open for future
         * can still use this part of code with unique() tacked at the end
         */

        
         // $categories = $this->categories()->with('subCategories')->get()->pluck('subCategories')->flatten();
         // return $this->categories->concat($subCategories)->unique();
    }
}