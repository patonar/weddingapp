<?php

class Create_Checklists_Table {

	public function up()
	{
		Schema::create('checklists', function($table) {
			$table->increments('id');
			$table->string('title');
			$table->text('description');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('checklists');
	}

}