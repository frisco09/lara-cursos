<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_migration', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('title');
            $table->longText('description');
            $table->longText('about_instructor');
            $table->double('discount_price', 8, 2);
            $table->double('actual_price', 8, 2);
            $table->string('play_list_url');
            $table->integer('view_count')->dafault(0);
            $table->integer('subscriber_count')->dafault(0);
            $table->integer('status')->dafault(0); // live: 1 | not live: 0;
            $table->string('photo')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('courses_migration');
    }
}
