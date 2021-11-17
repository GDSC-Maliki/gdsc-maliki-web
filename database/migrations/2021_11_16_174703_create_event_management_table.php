<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventManagementTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_management', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('email')->unique();
			$table->string('nama');
			$table->string('instansi');
			$table->string('pernahbelum');
			$table->string('bersedia');
			$table->string('kendala');
			$table->string('harapan');
			$table->string('nowa');
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
		Schema::dropIfExists('event_management');
	}
}
