<?php

class Create_User_Table {

	public function up()
	{
		Schema::create('user', function($table) {
			$table->increments('id');
			$table->string('username',128);
			$table->string('firstname',128);
			$table->string('lastname',128);
			$table->string('password',64);
			$table->string('email',128);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('user');
	}

}