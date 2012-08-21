<?php

class Create_Todo_Table {

	public function up()
	{
		Schema::create('todo', function($table) {
			$table->increments('id');
			$table->integer('checklist_id');
			$table->text('title');
			$table->text('description');
			$table->date('due');
			$table->boolean('complete');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('todo');
	}

}