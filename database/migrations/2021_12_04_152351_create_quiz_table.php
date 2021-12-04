<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuizTable extends Migration {

	public function up()
	{
		Schema::create('quiz', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('question_id')->unsigned();
			$table->string('quiz_name', 100);
			$table->tinyInteger('type');
			$table->tinyInteger('status')->default('0');
			$table->tinyInteger('lavel');
			$table->string('subject_name', 50)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->mediumInteger('created_by')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('quiz');
	}
}