<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up()
	{
		Schema::table('quotes', function (Blueprint $table) {
			$table->foreignId('movie_id')->change()->references('id')->on('movies')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::dropIfExists('quotes');
	}
};
