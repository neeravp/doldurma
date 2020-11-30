<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('language_id')->nullable()->onUpdate('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('slug')->nullable();
            $table->boolean('post_type');
            $table->boolean('published');
            $table->boolean('selected_for_app')->default(false);
            $table->boolean('selected_for_intermediate')->default(false);
            $table->boolean('is_breaking_news')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->boolean('private')->default(false);
            $table->string('password')->collation('utf8mb4_persian_ci')->nullable();
            $table->boolean('scheduled')->default(false);
            $table->timestamp('published_date_time')->nullable();
            $table->text('featured_image');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}