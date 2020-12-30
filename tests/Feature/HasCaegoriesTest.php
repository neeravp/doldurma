<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Tests\Fixtures\TestDatabaseSeeder;
use Tests\TestCase;

/**@group Categories */
class HasCaegoriesTest extends TestCase
{
    use RefreshDatabase;
    
    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(TestDatabaseSeeder::class);
    }
   /** @test */
   /**@group Categories */
   public function it_can_get_all_categories_for_portal_manager_in_nested_tree_structure ()
   {
       $alfred = User::whereUsername('alfred')->firstOrFail();
       $this->assertTrue($alfred->isPortalManager());
    
        $availableCategories = $alfred->availableCategories();

        //Parent Categories
        $this->assertCount(1, $availableCategories);
        $this->assertEquals('application', $availableCategories->first()->name);

        $application = $availableCategories->first();        
        //Second Level Categories
        $this->assertCount(2, $application->subcategories);
        $this->assertEquals(['web', 'mobile'], $application->subcategories->pluck('name')->all());

        //ThirdLevel
        $web = $application->subCategories->first(fn($sub) => $sub->name === 'web');
        $this->assertCount(4, $web->subcategories);
        $this->assertEquals(['php', 'html', 'css', 'js'], $web->subcategories->pluck('name')->all());

        $mobile = $application->subCategories->first(fn($sub) => $sub->name === 'mobile'); 
        $this->assertCount(2, $mobile->subcategories);
        $this->assertEquals(['flutter', 'java'], $mobile->subcategories->pluck('name')->all());

        //FourthLevel
        $php = $web->subcategories->first(fn($sub) => $sub->name === 'php');
        $this->assertCount(2, $php->subcategories);
        $this->assertEquals(['laravel', 'lumen'], $php->subcategories->pluck('name')->all());
   }

   /** @test */
   public function it_can_get_available_categories_for_portal_manager_as_flat_collection ()
   {
        $alfred = User::whereUsername('alfred')->firstOrFail();
        $this->assertTrue($alfred->isPortalManager());
        $availableCategories = $alfred->categories;

        $this->assertCount(11, $availableCategories);
        $this->assertCount(11, $availableCategories->unique());
   }

   /** @test */
   public function it_can_display_names_of_all_categories_associated_with_portal_manager ()
   {
        $alfred = User::whereUsername('alfred')->firstOrFail();
        $this->get('/posts/alfred')
            ->assertSee($alfred->categories->pluck('name')->all());
   }

   /** @test */
   public function it_can_get_available_categories_for_manager_in_nested_tree_structure ()
   {
        $ella = User::whereUsername('ella')->firstOrFail(); 
        $this->assertTrue($ella->isManager());
        $availableCategories = $ella->availableCategories();
        
        $this->assertCount(1, $availableCategories);
        $this->assertTrue($availableCategories->first()->name === 'php');
        $this->assertFalse(
            $availableCategories->contains('name', ['html', 'css', 'js', 'web', 'mobile', 'flutter', 'java'])
        );
        $this->assertCount(1, $availableCategories->unique());

        //SecondLevel
        $php = $availableCategories->first();
        $this->assertCount(2, $php->subcategories);
        $this->assertEquals(
            ['laravel', 'lumen'], 
            $php->subcategories->pluck('name')->toArray()
        );
        $this->assertFalse(
            $php->subcategories->contains('name', ['html', 'css', 'js', 'web', 'mobile', 'flutter', 'java'])
        );
        $this->assertCount(2, $php->subcategories->unique());

        $this->assertEquals(['php', 'laravel', 'lumen'], $ella->categories->pluck('name')->all());
        $this->assertCount(3, $ella->categories);
        
   }

   /** @test */
   public function it_can_display_names_of_all_categories_associated_with_manager ()
   {
        $elizabeth = User::whereUsername('elizabeth')->firstOrFail();
        $this->get('/posts/elizabeth')
            ->assertSee($elizabeth->categories->pluck('name')->all());

        $ella = User::whereUsername('ella')->firstOrFail();
        $this->get('/posts/ella')
            ->assertSee($ella->categories->pluck('name')->all());
   }

   /** @test */
   public function it_can_get_available_categories_for_editor ()
   {
        $jack = User::whereUsername('jack')->firstOrFail();
        $availableCategories = $jack->availableCategories();

        $this->assertCount(1, $availableCategories);
        $this->assertEquals('mobile', $availableCategories->first()->name);
        $this->assertFalse(
            $availableCategories->contains('name', ['html', 'css', 'js', 'web', 'php', 'laravel', 'lumen'])
        );
        $this->assertCount(1, $availableCategories->unique());

        //SecondLevel
        $mobile = $availableCategories->first();
        $this->assertCount(2, $mobile->subcategories);
        $this->assertCount(2, $mobile->subcategories->unique());
        $this->assertEquals(['flutter', 'java'], $mobile->subcategories->pluck('name')->all());
        $this->assertFalse(
            $mobile->subcategories->contains('name', ['html', 'css', 'js', 'web', 'php', 'laravel', 'lumen'])
        );
   }

   /** @test */
   public function it_can_display_names_of_all_categories_associated_with_editor ()
   {
        $jack = User::whereUsername('jack')->firstOrFail();
        $this->get('/posts/jack')
            ->assertSee($jack->categories->pluck('name')->all());

        $scarlett = User::whereUsername('scarlett')->firstOrFail();
        $this->get('/posts/scarlett')
            ->assertSee($scarlett->categories->pluck('name')->all());
   }

   /** @test */
   public function it_can_get_available_categories_for_writer ()
   {
        $jim = User::whereUsername('jim')->firstOrFail();
        $this->assertTrue($jim->isWriter());

        $availableCategories = $jim->availableCategories();
        $this->assertCount(1, $availableCategories);
        $this->assertEquals('flutter', $availableCategories->first()->name);
        $this->assertFalse(
            $availableCategories->contains(
                'name', 
                ['html', 'css', 'js', 'web', 'php', 'laravel', 'lumen', 'mobile', 'java']
            )
        );

        //SecondLevel
        $flutter = $availableCategories->first();
        $this->assertCount(0, $flutter->subcategories);       
   }

   /** @test */
   public function it_can_display_names_of_all_categories_associated_with_writer ()
   {
        $jim = User::whereUsername('jim')->firstOrFail();
        $this->get('/posts/jim')
            ->assertSee($jim->categories->pluck('name')->all());

        $linda = User::whereUsername('linda')->firstOrFail();
        $this->get('/posts/linda')
            ->assertSee($linda->categories->pluck('name')->all());
   }
}