<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id');
            $table -> integer('guest_id') -> unsigned() -> default(0);
            $table->foreign('guest_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');        
			$table->string('title');
			$table->string('price');
			$table->string('condition');
			$table->string('category');
			$table->text('description');
			$table->string('images');
			$table->string('province');
			$table->string('city');
			$table->string('mobile');
            $table->string('slug')->unique();
            $table->boolean('active');
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
        Schema::dropIfExists('item');
    }
}