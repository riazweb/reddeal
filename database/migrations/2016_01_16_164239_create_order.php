<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrder extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('item_id');
			$table->string('name');
			$table->string('email');
			$table->string('mobile');
			$table->text('address');
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
		Shema::drop('order');
	}

}
