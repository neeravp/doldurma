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
     * Get all Categories with deeply nested subCategories 
     * as tree structure for the logged in Portal Manager.
     */
    protected function categoriesForPortalManager()
    {
        return $this->categories()
            ->whereNull('parent_id')
            ->with([
                'subCategories' => fn($query)  => $query->forUser($this->id),
                'subCategories.subCategories' => fn($query) => $query->forUser($this->id),
                'subCategories.subCategories.subCategories' => fn($q) => $q->forUser($this->id)
            ])
            ->get();
    }

    /**
     * Get all Categories with deeply nested subCategories 
     * as tree structure for the logged in Manager.
     */
    protected function categoriesForManager()
    {
        return $this->categories()
            ->whereIn('parent_id', Category::topLevel()->pluck('id'))
            ->with([
                'subCategories' => fn($query)  => $query->forUser($this->id),
                'subCategories.subCategories' => fn($query) => $query->forUser($this->id),
                'subCategories.subCategories.subCategories' => fn($q) => $q->forUser($this->id)
            ])
            ->get();
    }

    /**
     * Get all Categories with deeply nested subCategories 
     * as tree structure for the logged in Editor.
     */
    protected function categoriesForEditor()
    {
        return $this->categories()
            ->whereIn('parent_id', Category::secondLevel()->pluck('id'))
            ->with([
                'subCategories' => fn($query)  => $query->forUser($this->id),
                'subCategories.subCategories' => fn($query) => $query->forUser($this->id),
                'subCategories.subCategories.subCategories' => fn($q) => $q->forUser($this->id)
            ])
            ->get();
    }

    /**
     * Get all Categories with deeply nested subCategories 
     * as tree structure for the logged in Writer.
     */
    protected function categoriesForWriter()
    {
        return $this->categories()
            ->with([
                'subCategories' => fn($query)  => $query->forUser($this->id),
                'subCategories.subCategories' => fn($query) => $query->forUser($this->id),
                'subCategories.subCategories.subCategories' => fn($q) => $q->forUser($this->id)
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
       $subCategories = $this->availableCategories()->pluck('subCategories')->flatten();
       $level2SubCategories = $subCategories->pluck('subCategories')->flatten();
       $level3SubCategories = $level2SubCategories->pluck('subCategories')->flatten();
      
       
       return $this->availableCategories()->map(function($category){
            unset($category->subCategories);
            return $category;
       })
       ->concat($subCategories->map(function($subCategory){
           unset($subCategory->subCategories);           
           return $subCategory;
       }))
       ->concat($level2SubCategories->map(function($l2Cat) {
           unset($l2Cat->subCategories);
           return $l2Cat;
       }))
       ->concat($level3SubCategories);
    }
}