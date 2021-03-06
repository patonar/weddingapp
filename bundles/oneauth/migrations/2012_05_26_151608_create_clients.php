<?php

class OneAuth_Create_Clients {
	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oneauth_clients', function ($table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('provider', 50);
			$table->string('uid', 255);
			$table->string('access_token', 255)->nullable();
			$table->string('secret', 255)->nullable();
			$table->string('refresh_token', 255)->nullable();
			$table->integer('expires')->defaults(0)->nullable();

			$table->timestamps();
			$table->index('access_token');
			$table->index('user_id');
			$table->unique(array('provider', 'uid'));
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oneauth_clients');
	}
}