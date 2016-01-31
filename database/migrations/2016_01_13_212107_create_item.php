<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItem extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catid');
            $table->integer('subcatid');
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->integer('quantity');
            $table->decimal('sale_price',8,2);
            $table->decimal('purchase_price',8,2);
            $table->decimal('real_price',8,2);
            $table->enum('type',['new','deal','discount','sale']);
            $table->enum('is_active',['Y','N']);
            $table->integer('sort');
            $table->string('option');
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
		Schema::drop('item');
	}

}
