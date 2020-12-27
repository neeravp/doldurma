<?php

namespace App\Concerns;

use App\Models\Category;

trait HasCategories
{
    /**
     * Get all Categories and deeply nested subCatetories
     * for the currently logged in User as per prime Role.
     */
    public function availableCategories()
    {        
        $method = 'categoriesFor' . $this->primeRole();

        return $this->{$method}();
    }

    /**
     * Get all Categories with deeply nested subcategories 
     * as tree structure for the logged in Portal Manager.
     */
    protected function categoriesForPortalManager()
    {
        return $this->categories()
            ->whereNull('parent_id')
            ->with([
                'subcategories' => fn($query)  => $query->forUser($this->id),
                'subcategories.subcategories' => fn($query) => $query->forUser($this->id),
                'subcategories.subcategories.subcategories' => fn($q) => $q->forUser($this->id)
            ])
            ->get();
    }

    /**
     * Get all Categories with deeply nested subcategories 
     * as tree structure for the logged in Manager.
     */
    protected function categoriesForManager()
    {
        return $this->categories()
            ->whereIn('parent_id', Category::topLevel()->pluck('id'))
            ->with([
                'subcategories' => fn($query)  => $query->forUser($this->id),
                'subcategories.subcategories' => fn($query) => $query->forUser($this->id),
                'subcategories.subcategories.subcategories' => fn($q) => $q->forUser($this->id)
            ])
            ->get();
    }

    /**
     * Get all Categories with deeply nested subcategories 
     * as tree structure for the logged in Editor.
     */
    protected function categoriesForEditor()
    {
        return $this->categories()
            ->whereIn('parent_id', Category::secondLevel()->pluck('id'))
            ->with([
                'subcategories' => fn($query)  => $query->forUser($this->id),
                'subcategories.subcategories' => fn($query) => $query->forUser($this->id),
                'subcategories.subcategories.subcategories' => fn($q) => $q->forUser($this->id)
            ])
            ->get();
    }

    /**
     * Get all Categories with deeply nested subcategories 
     * as tree structure for the logged in Writer.
     */
    protected function categoriesForWriter()
    {
        return $this->categories()
            ->with([
                'subcategories' => fn($query)  => $query->forUser($this->id),
                'subcategories.subcategories' => fn($query) => $query->forUser($this->id),
                'subcategories.subcategories.subcategories' => fn($q) => $q->forUser($this->id)
            ])
            ->get();
    }

    /**
     * Get a flattened collection of Categories for the logged in User.
     * All parent categories and deeply nested categories as flat
     * collection without any tree structure or nesting.
     */
    public function availableCategoriesFlattened()
    {      
       $subcategories = $this->availableCategories()->pluck('subcategories')->flatten();
       $level2SubCategories = $subcategories->pluck('subcategories')->flatten();
       $level3SubCategories = $level2SubCategories->pluck('subcategories')->flatten();
      
       
       return $this->availableCategories()->map(function($category){
            unset($category->subcategories);
            return $category;
       })
       ->concat($subcategories->map(function($subCategory){
           unset($subCategory->subcategories);           
           return $subCategory;
       }))
       ->concat($level2SubCategories->map(function($l2Cat) {
           unset($l2Cat->subcategories);
           return $l2Cat;
       }))
       ->concat($level3SubCategories);
    }
}