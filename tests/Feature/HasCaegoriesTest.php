<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/**@group Categories */
class HasCaegoriesTest extends TestCase
{
   /** @test */
   /**@group Categories */
   public function it_can_get_all_categories_for_portal_manager ()
   {
       $portalManager = User::whereHas('roles', fn($query) => $query->where('label', 'is-portal-manager'))->first();
        
        $portalManagerCategoryIds = DB::table('category_user')
            ->where('user_id', $portalManager->id)
            ->whereIn('category_id', Category::topLevel()->pluck('id'))
            ->pluck('category_id');

       $this->assertCount($portalManagerCategoryIds->count(), $portalManager->availableCategories());
       $this->assertCount($portalManager->categories->count(), $portalManager->availableCategoriesFlattened());
   }

   /** @test */
   public function it_can_get_available_categories_for_manager ()
   {
        $manager = User::whereHas('roles', fn($query) => $query->where('label', 'is-manager'))->firstOrFail();
        
        $managerCategoryIds = DB::table('category_user')
            ->where('user_id', $manager->id)
            ->whereIn('category_id', Category::secondLevel()->pluck('id'))
            ->pluck('category_id');
       
        $this->assertCount($managerCategoryIds->count(), $manager->availableCategories());
        $this->assertCount(
            $manager->categories->count(),
            $manager->availableCategoriesFlattened()
        );
   }

   /** @test */
   public function it_can_get_available_categories_for_editor ()
   {
        $editor = User::whereHas('roles', fn($query) => $query->where('label', 'is-editor'))->firstOrFail();
        
        $editorCategoryIds = DB::table('category_user')
            ->where('user_id', $editor->id)
            ->whereIn('category_id', Category::thirdLevel()->pluck('id'))
            ->pluck('category_id');
        
        $this->assertCount($editorCategoryIds->count(), $editor->availableCategories());
        $this->assertCount(
            $editor->categories->count(), 
            $editor->availableCategoriesFlattened()
        );
       
   }

   /** @test */
   public function it_can_get_available_categories_for_writer ()
   {
        $writer = User::whereHas('roles', fn($query) => $query->where('label', 'is-writer'))->firstOrFail();
        
        $this->assertCount($writer->categories->count(), $writer->availableCategories());
        $this->assertCount(
            $writer->categories->count(), 
            $writer->availableCategoriesFlattened()
        );
       
   }
}