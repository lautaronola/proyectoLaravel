<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', '200');
            $table->smallinteger('quantity');
            $table->decimal('price', 8, 2);
            $table->decimal('subtotal', 8, 2);
            $table->biginteger('user_id')->unsigned(); //FK de users. user comprador
            $table->string('featured_img', 300);
            $table->smallinteger('status')->default(0);
            $table->biginteger('order_number');
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
        Schema::dropIfExists('carritos');
    }
}
