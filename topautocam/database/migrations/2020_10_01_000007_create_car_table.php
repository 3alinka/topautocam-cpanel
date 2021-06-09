<?php

use App\Util\UTIL;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table->increments('id');

            // many-to-one
            $table->integer('order_id')->unsigned()->nullable();
            $table->foreign('order_id')->references('id')->on('order')
                ->onUpdate('cascade')->onDelete('set null');
            $table->string('title', 32);
            $table->text('detail', 102400);
            $table->string('image', 64)->nullable();
            $table->decimal('price', 15, 2)->unsigned()->nullable();
            $table->decimal('price_partner', 15, 2)->unsigned()->nullable();
            $table->string('code', 32)->unique()->nullable();
            $table->string('vin', 64)->unique()->nullable();
            $table->string('year', 32)->nullable();
            $table->string('make', 32)->nullable();
            $table->string('model', 32)->nullable();
            $table->string('color', 32)->nullable();
            $table->string('drive', 32)->nullable();
            $table->string('grade', 32)->nullable();
            $table->string('fuel', 32)->nullable();
            
            $table->enum('status', UTIL::INVENTORY_STATUS)
                ->default(UTIL::INVENTORY_STATUS['IN_STOCK']);
            $table->enum('selected', UTIL::SELECTED)
                ->default(UTIL::SELECTED['NORMAL']);
            $table->integer('view_count')->default(0);
            
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
        Schema::dropIfExists('car');
    }
}
