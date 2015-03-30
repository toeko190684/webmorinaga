<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKategori extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kategoris', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_kategori');
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
		Schema::table('kategoris', function(Blueprint $table)
		{
			Schema::drop('kategoris');
		});
	}

}
