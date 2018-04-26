<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {    
        Schema::create('packets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('destination_id');
            $table->enum('type', ['hiking', 'camping', 'all']);
            $table->text('description');
            $table->integer('count_adults');
            $table->integer('count_kids');
            $table->integer('user_id');
            $table->integer('price');
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
        Schema::dropIfExists('packets');
    }
}
