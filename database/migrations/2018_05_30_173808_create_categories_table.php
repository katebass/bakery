<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('description');
			$table->string('photo')->nullable()->default("https://avatanplus.com/files/resources/mid/57de41539df151573c2f2ebf.png");
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
		Schema::dropIfExists('categories');
	}
}
