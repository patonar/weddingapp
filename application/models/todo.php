<?php

class Todo extends Eloquent 
{

	public function Checklist()
	{

		return $this->belongs_to('Checklist');
	}

}