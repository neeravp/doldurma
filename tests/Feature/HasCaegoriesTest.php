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

class HasCaegoriesTest extends TestCase
{
   /** @test */
   public function it_can_get_all_categories_for_portal_manager ()
   {
       $portalManager = User::whereHas('roles', fn($query) => $query->where('label', 'is-portal-manager'))->first();
       
       $this->assertCount(Category::count(), $portalManager->availableCategories());
       $this->assertCount(Category::count(), $portalManager->availableCategoriesFlattened());
   }

   /** @test */
   public function it_can_get_available_categories_for_manager ()
   {
       $manager = User::whereHas('roles', fn($query) => $query->where('label', 'is-manager'))->firstOrFail();

    //    dd($manager->availableCategoriesFlattened()->toArray(), PHP_EOL . "Next" . PHP_EOL, $manager->availableCategories()->toArray());
        $managerCategoryIds = DB::table('category_user')->where('user_id', $manager->id)->pluck('category_id');
        $managerSubCategoriesCount = Category::whereIn('parent_id', $managerCategoryIds)->count();
       
       $this->assertCount($managerCategoryIds->count(), $manager->availableCategories());
       $this->assertCount(
           $managerCategoryIds->count(),
           $manager->availableCategoriesFlattened()
        );
   }

   /** @test */
   public function it_can_get_available_categories_for_editor ()
   {
        $editor = User::whereHas('roles', fn($query) => $query->where('label', 'is-editor'))->firstOrFail();

        $editorCategoryIds = DB::table('category_user')->where('user_id', $editor->id)->pluck('category_id');
        $editorSubCategoriesCount = Category::whereIn('parent_id', $editorCategoryIds)->count();
        
        $this->assertCount($editorCategoryIds->count(), $editor->availableCategories());
        $this->assertCount(
            $editorCategoryIds->count(), 
            $editor->availableCategoriesFlattened()
        );
       
   }

   /** @test */
   public function it_can_get_available_categories_for_writer ()
   {
        $writer = User::whereHas('roles', fn($query) => $query->where('label', 'is-writer'))->firstOrFail();

        $writerCategoryIds = DB::table('category_user')->where('user_id', $writer->id)->pluck('category_id');
        $writerSubCategoriesCount = Category::whereIn('parent_id', $writerCategoryIds)->count();
        
        $this->assertCount($writerCategoryIds->count(), $writer->availableCategories());
        $this->assertCount(
            $writerCategoryIds->count(), 
            $writer->availableCategoriesFlattened()
        );
       
   }
}