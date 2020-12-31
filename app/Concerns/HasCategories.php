<?php

namespace App\Concerns;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

trait HasCategories
{
    /**
     * Get all Categories associated with the User in nested tree structure
     */
    public function availableCategories(): Collection
    {
        $categories = $this->categories;

        $parents = $categories->filter(fn($cat)  =>
            !$categories->contains('id', $cat->parent_id) || is_null($cat->parent_id)
        );

        $parents->map(fn($parent) => $this->setNested($parent, $categories));

        return $parents;
    }

    /**
     * Get all Categories with Posts associated with the User in nested tree structure.
     */
    public function availableCategoriesWithPosts(): Collection
    {
        $categories = $this->categories()->withPosts()->get();

        $parents = $categories->filter(fn($cat)  =>
            !$categories->contains('id', $cat->parent_id) || is_null($cat->parent_id)
        );

        $parents->map(fn($parent) => $this->setNested($parent, $categories));

        return $parents;
    }

    /**
     * Set the nested structure for the given $parent with relation.
     */
    protected function setNested($parent, $categories)
    {
        $parent->setRelation('subcategories', $categories->where('parent_id', $parent->id));
        $parent->subcategories->map(function($sub) use($categories){
            if($categories->contains('parent_id', $sub->id)) {
                $this->setNested($sub, $categories);
            }
            return $sub;
        });

        return $parent;
    }
    
    // public function availableCategories($columns = '*')
    // {
    //     return $this->categories()
    //         ->where(function($query) {
    //             $query
    //             ->whereNotIn('parent_id', $this->categories->pluck('id'))
    //             ->orWhereNull('parent_id');
    //         })
    //         ->with([
    //             'subcategories' => fn($q) => $q->forUser($this->id)->select($columns),
    //             'subcategories.subcategories' => fn($q) => $q->forUser($this->id)->select($columns),
    //             'subcategories.subcategories.subcategories' => fn($q) => $q->forUser($this->id)->select($columns)
    //             ])
    //         ->select($columns)
    //         ->get();
    // }
    
}