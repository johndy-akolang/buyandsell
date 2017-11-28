<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePrivatemessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // TODO: why there is no FK associated with 'user' table?
        // TODO: add 'is_read' column
        Schema::create('privatemessage', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id');
            $table->integer('receiver_id');
            $table->string('name');
            $table->string('email');
            $table->text('message');
            $table->boolean('read');
            $table->timestamps();
            
            
            $table->index('sender_id');
            $table->index('receiver_id');
            $table->index('sender_id', 'read');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('privatemessage');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
