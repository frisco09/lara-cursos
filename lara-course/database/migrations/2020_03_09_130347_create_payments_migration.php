<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments_migration', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('course_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->double('total_amount', 10, 2);
            $table->tinyInteger('status')->default(0);
            $table->longText('description')->nullable();
            $table->string('payment_processor')->nullable();
            $table->string('mode_of_payment')->nullable();
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
        Schema::dropIfExists('payments_migration');
    }
}
