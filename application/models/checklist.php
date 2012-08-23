<?php

class Checklist extends Eloquent 
{
	public function Todo()
	{

		return $this->has_many('Todo');
		return $this->belongs_to('User');

	}
}