<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->bigIncrements('computer_id');
            $table->foreignId('category_id');
            $table->string('computer_name');
            $table->longText('computer_detail');
            $table->text('computer_image');
            $table->integer('computer_status');
            // $table->dateTime('added_on');
            $table->string('full')->nullable();
            $table->float('full_price', 10, 2)->nullable();
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
        Schema::dropIfExists('computers');
    }
};
